<?php
	
/*
	ЗАДАЧА
	Отрисовать навигационное меню на странице, типа
		<a href="contact.php">Contact</a>
	используя массив в качестве структуры меню
	
	ЗАДАНИЕ 1
	- Создайте ассоциативный массив $menu
	- Заполните массив соблюдая следующие условия:
		- Название ячейки является пунктом меню, например: Home, About, Contact...
		- Значение ячейки является именем файла, на который будет указывать ссылка, например: index.php, about.php, contact.html...
	*/
function getMenu($menu,$vertical=true){

	if ($vertical){

		foreach ($menu as $k=>$v){

			echo "<a href=\"$v\">".$k."</a><br>" ;

		}
	}
	else {
		
		foreach ($menu as $k=>$v){

			echo "<a href='$v'>$k</a>&#9" ;

		}
	}
}

	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Меню</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<h1>Меню</h1>
<?php

	/*
	ЗАДАНИЕ 2
	- Используя цикл foreach отрисуйте вертикальное меню, структура которого описана в массиве $menu
	*/

	$newmenu=array(
			"Table"=>'table.php',
			"Array"=>'array.php',
			"For"=>'for.php',
			"Size"=>'size.php'
	);

getMenu($newmenu,true);
getMenu($newmenu,false);

?>
</body>
</html>
