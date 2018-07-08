<?php

for($i = 0; $i < count($user); ++$i){
    echo "<tr='?id=".$user[$i]['id']."'><td>".$user[$i]['name']."</td><td>".$user[$i]['email']."</td><td>".$user[$i]['created_at']."</td>;
    echo "</tr>"";
}

