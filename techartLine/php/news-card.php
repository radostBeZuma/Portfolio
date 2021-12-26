<?php
	//получаю номер страницы
	$getNum = $_GET['page'];
	//получаю именно число
	preg_match('/\d+/',"$getNum", $pageNum);
	//string
	$page = implode($pageNum);
	//int
	settype($page, 'integer');
	// расчет первой записи
	$iniEntry=($page*5)-4;

	// основной массив с новостями
	$arr = array();


	$mysqli = new mysqli('localhost', 'root', 'root', 'news');
	$query2 = "SELECT * FROM `news` order by idate desc";
	$result2 = $mysqli->query($query2);

	$t = 0;

	if ($page==0) {
		for ($i=0; $i < 5; $i++) { 
			$result2->data_seek($i);
			$row2 = $result2->fetch_assoc();
		
			$arr[$t]=$row2;
			$t++;

			$row2["idate"] = gmdate('d.m.Y', $row2["idate"]); 
			
		}
	} else {
		for ($i=$iniEntry; $i <= $page*5; $i++) { 
			

			$result2->data_seek($i-1);
			$row2 = $result2->fetch_assoc();
			
			$arr[$t]=$row2;
			$t++;

			$row2["idate"] = gmdate('d.m.Y', $row2["idate"]); 
			if ($i==$rows) {
				break;
			}
			
		}
	}

	
	
?>