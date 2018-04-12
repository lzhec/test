<?php
function connect($host,$user,$password,$database){
	global $connect;
	$connect = mysqli_connect($host,$user,$password,$database);
	if(!$connect){
		echo "ОШИБКА СОЕДИНЕНИЯ С БАЗОЙ ДАННЫХ";
		exit;
	}
	if(!mysqli_select_db($connect,$database)){
		echo "ОШИБКА ВЫБОРА БАЗЫ ДАННЫХ";
		exit;
	}
}

function get(){
	global $connect;
	$result = mysqli_query($connect,"SELECT id,name,owner_id FROM multilvl_tree");
	$array = array();
	$rows = mysqli_num_rows($result);
	for ($i = 0; $i < $rows; ++$i){
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		if(empty($array[$row['owner_id']])){
			$array[$row['owner_id']] = array();
		}
		$array[$row['owner_id']][] = $row;
	}
	return $array;
}

function display($array, $owner_id = 0){
	if(empty($array[$owner_id])){
		return;
	}
	echo "<ul>";
	for($i = 0; $i < count($array[$owner_id]); ++$i){
		echo "<li><a href='?id=".$array[$owner_id][$i]['id'].
		"owner_id=".$owner_id."'>".$array[$owner_id][$i]['name']."</a>";
		display($array, $array[$owner_id][$i]['id']);
		echo "</li>";
	}
	echo "</ul>";
}
?>

