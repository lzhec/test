<script>
    $('.select-sort').click(function(){ 
        $('.sortlist').slideToggle(200);
    });
</script>
<?php
function sort_list($a, $subkey) {
    foreach ($a as $k=>$v) {
        $b[$k] = strtolower($v[$subkey]);
    }
    asort($b);
    
    foreach ($b as $key=>$val) {
        $c[] = $a[$key];
    }
    return $c;
}

function sorter() { 
    global $array;
    $sort_name;
    $sort_name = 'без сортировки';
    $sorting = $_GET['sort'];
    switch ($sorting) {
        case 'name-sort';
        $array = sort_list($user, 'name');
        $sort_name = 'по имени пользователя';
        break;

        case 'email-sort';
        $array = sort_list($array, 'email');
        $sort_name = 'по email';
        break;
        
        case 'date-sort';
        $array = sort_list($array, 'created_at');   
        $sort_name = 'по дате';
        break;
    }
}
?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                </div>
                <?php if(auth()->guard()->check()): ?>
                    <table border="1">
                        <caption style="caption-side: top;">Таблица пользователей</caption>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->created_at); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>

                    <!--<?php 
                    /*$array = (array) $users;*
                    for ($i = 0; $i < count($array); ++$i) {
                        echo $array[$i];
                    }
                    
                    for($i = 0; $i < count($user); ++$i) {
                        echo "<tr='?id=".$user[$i]['id']."'><td>".$user[$i]['name']."</td><td>".$user[$i]['email']."</td><td>".$user[$i]['created_at']."</td>";
                        echo "</tr>";
                    }*/
                    ?>-->
}
                <?php endif; ?>

                <div class="sort-container">
                    <p class="sortir">Сортировка:</p>
                    <button class="sel-btn"><a class="select-sort"><?php echo $sort_name; ?></a></button>
                    
                    <li class="sortlist">
                        <button>
                            <a id="byname" href="site.php?sort=name-sort">по имени пользователя</a>
                        </button><br>
                        <button width="200">
                            <a id="byemail" href="site.php?sort=email-sort">по email</a>
                        </button><br>
                        <button>
                            <a id="bystat" href="site.php?sort=date-sort">по дате регистрации</a>
                        </button>
                    </li>
                </div>                  
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>