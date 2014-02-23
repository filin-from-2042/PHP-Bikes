
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Таблица умножения</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body> 
	<h1>Таблица умножения</h1>
	<?php





function getTable($cols,$rows,$colors){


echo "<table border='1' align='center'>";

for ($i=1;$i<=$rows;$i++){
	
	echo '<tr>';
	
		for ($b=1;$b<=$rows;$b++){
			$d=$b*$i;
			if ($i==1 or $b==1) {
				echo "<th bgcolor=\"$colors\">".$d.'</th>'; 
				}
			else	{
				echo '<td>'.$d.'</td>';	
							}
				

		}
	
	echo '</tr>';	
	
	}

echo '</table>';


}


getTable(20,20,'blue');
getTable('yellow');
getTable();

	/*
	ЗАДАНИЕ 3
	- Отрисуйте таблицу умножения вызывая функцию getTable() с различными параметрами
	*/
	/*
	ЗАДАНИЕ 5
	- Отрисуйте таблицу умножения вызывая функцию getTable() без параметров
	- Отрисуйте таблицу умножения вызывая функцию getTable() с одним параметром
	- Отрисуйте таблицу умножения вызывая функцию getTable() с двумя параметрами
	*/
	?>
</body>
</html>
