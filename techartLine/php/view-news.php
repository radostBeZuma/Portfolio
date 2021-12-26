<?php
$arrView = array();
$getId = $_GET['id'];

preg_match('/\d+/',"$getId", $id);

$id = implode($id);
	//int
settype($id, 'integer');


$mysqli = new mysqli('localhost', 'root', 'root', 'news');
$query3 = "SELECT * FROM `news` where id=?";
		$sw = $mysqli->prepare($query3); 
		$sw->bind_param("i", $id); // привязали переменную $id к запросу
		$sw->execute(); // выполнили запрос
		$result3 = $sw->get_result(); // получили результат
		$row3 = $result3->fetch_assoc();
		$arrView = $row3;
		
?>