<?php
header("Content-Type:text/html;charset=UTF8");

include 'config.php';
include 'functions/functions.php';

connect(HOST,USER,PASS,DATABASE);

$result = get();
print_r($result);

?>