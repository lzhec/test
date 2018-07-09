<?php
/*function sort_list($a, $subkey) {
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
    global $sort_name;
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
}*/
?>