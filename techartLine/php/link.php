<!-- link page -->
<?php
	$mysqli = new mysqli('localhost', 'root', 'root', 'news');
	$query = "SELECT * FROM `news`";
	$selectN = $mysqli->prepare($query);
	$selectN->execute();
	// сохранение результата во внутреннем буфере
	$selectN->store_result();
	// количество строк в БД
	$rows = $selectN->num_rows;
	$numPage = intdiv($rows,5);
		//1>= деления <=4
		if (1 >= ($rows % 5) and ($rows % 5)<= 4) {
			$numPage++;
		}
?>