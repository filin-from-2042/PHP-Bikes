<?php

/*
ЗАДАНИЕ 1
- Создайте массив $bmw с ячейками:
	"model"
	"speed"
	"doors"
	"year"
- Заполните ячейки значениями: "X5", 120, 5, "2006"	
- Создайте массивы $toyota и $opel аналогичные массиву $bmw.
- Заполните массив $toyota значениями: "Carina", 130, 4, "2007"
- Заполните массив $opel значениями: "Corsa", 140, 5, "2007"		
*/
error_reporting(E_ALL);

$bmw=array(
		"model"=>"X5",
		"speed"=> 120,
		"doors"=>5,
		"year"=>"2006",
				);


$toyota=array(
		"model"=>"Carina",
		"speed"=> 130,
		"doors"=>4,
		"year"=>"2007",

);

$opel=array(
		"model"=>"Corsa",
		"speed"=> 140,
		"doors"=>5,
		"year"=>"2007",

);
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Массивы</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<h1>Массивы</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	- Выведите значения всех трёх массивов в виде: name - model - speed - doors -year,  например: bmw - 120 - 5 - 2006*/
	
	$car="";							//строка с полным название автомобиля

	foreach ($bmw as $key=>$value) {
		
		$car.=$value;
		if($key!="year"){
			$car.=" - ";			
		}	
	}

	echo $car."<br>";

	$car="";

	foreach ($toyota as $key=>$value) {
		
		$car.=$value;
		if($key!="year"){
			$car.=" - ";			
		}	
	}

	echo $car."<br>";

	$car="";

	foreach ($opel as $key=>$value) {
		
		$car.=$value;
		if($key!="year"){
			$car.=" - ";			
		}	
	}

	echo $car."<br>";
	?>
</body>
</html>


