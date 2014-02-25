<?php
require_once "lib.inc.php";
require_once "data.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Добро пожаловать на MySite</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<table width="100%" border=1>
<tr>

	<!--Шапка сайта-->
	<td colspan="2" align="center">
	<?php
	include_once "top.inc.php";
	?>
		
	
	</td>
</tr>

<tr>
	<!--Меню-->
	<td width="20%" valign="top">
		<?php
			include_once "menu.inc.php";
		?>
		
		
		
	</td>
	<td>
	
		<!--Область контента-->
	<?php
	$pageid='';
	if (!empty($_GET['pageid']))
			$pageid=clearData($_GET['pageid']);
			switch ($pageid){
			case "page1": include "page1.php";break;
			case "page2": include "page2.php";break;
			case "page3": include "page3.php";break;
			case "table": include "table.php";break;
			case "calc": include "calc.php";break;
			default: echo "Добро пожаловать на главную страницу";
			} 





	?>




	</td>


</tr>
<tr>
	<!--Нижняя страницы-->
	<td colspan="2" align="center"> 
	
		<?php
		include_once "bottom.inc.php"; 
		?>
		
	</td>

</tr>
	









</table>

</body>
