<?php

$visit=0;		//начальные значения счетчиков
$lastvisit='';

if (isset($_COOKIE['visit'])) 
	$visit=$_COOKIE['visit'];
$visit++;

if (isset($_COOKIE['lastvisit']))
	$lastvisit=$_COOKIE['lastvisit'];

setcookie('visit',$visit);
setcookie('lastvisit',date('Y F j H-i-s'));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Последний визит</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Последний визит</h1>

<?php
if ($visit==1) {
	echo "Hello! It's first time!";
} else {
	echo 'посещение номер '.$visit.'<br>';
	echo 'последнее посещение '.$lastvisit;
}

?>

</body>
</html>
