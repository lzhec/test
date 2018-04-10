<?php
function connect($host,$user,$pass,$database){
	global $connect; 
	$connect = mysqli_connect($host,$user,$pass,$database);
	
	if(!$connect){
		echo "ОШИБКА СОЕДИНЕНИЯ С БАЗОЙ ДАННЫХ";
		exit;
	}
	if(!mysqli_select_db($connect,$database)){
		echo "ОШИБКА СОЕДИНЕНИЯ С БАЗОЙ ДАННЫХ";
		exit;
	}
}

function get(){
	$result = mysqli_query($connect, "SELECT id,name,owner_id FROM multilvl_tree");
	$array = array();
	$rows = mysqli_num_rows($result);
	for ($i = 0; $i < $rows; ++$i){
		$row = mysqli_fetch_row($result);
		$array[] = $row;
	}
	return $array;
}

//Метод рекурсии, существенныый недостаток которого является многократное обращения к базе данных
/*function my($owner_id){
	$result = "SELECT * FROM multilvl_tree WHERE id = $owner_id";
	while(){
		$row = mysqli_fetch_array($result);
		my($row['owner_id']);
	}
}*/
?>

