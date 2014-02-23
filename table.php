
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Таблица умножения</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body> 
	<h1>Таблица умножения</h1>
<?php
/*
	Функция  getTable отрисовывает таблицу в зависимости от входящих параметров: 
	$cols - кол-во столбцов
	$rows - кол-во строк
	$color - цвет заголовков

	Без параметров выведет таблицу 10х10 желтого цвета
*/ 
function getTable($cols=10,$rows=10,$colors='yellow'){


	echo "<table style=\"border:1px solid;margin:auto;\">";

	for ($curr_row=1;$curr_row<=$rows;$curr_row++){
		
		echo '<tr>';
		
			for ($curr_col=1;$curr_col<=$cols;$curr_col++){
				$d=$curr_col*$curr_row;
				if ($curr_row==1 or $curr_col==1) {
					echo "<th style=\"background-color:$colors\">".$d.'</th>'; 
				}else{
					echo '<td style="border:1px solid">'.$d."</td>";	
				}			

			}
		
		echo '</tr>';	
		
		}

	echo '</table>';


}


getTable(15,20,'red'); //15x20 красного цвета

getTable(); //10х10 желтая

?>
</body>
</html>
