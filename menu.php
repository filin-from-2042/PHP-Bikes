<?php
	
function getMenu($menu,$vertical=true){

if ($vertical){
foreach ($menu as $k=>$v){

		echo "<a href=\"$v\">".$k."</a><br>" ;
}
}
	else {
	
foreach ($menu as $k=>$v){

		echo "<a href='$v'>$k</a>" ;
}



}
}







/*
	ÇÀÄÀÍÈÅ 1
	- Îïèøèòå ôóíêöèþ getMenu()
	- Çàäàéòå äëÿ ôóíêöèè ïåðâûé àðãóìåíò $menu, â íåãî áóäåò ïåðåäàâàòüñÿ ìàññèâ, ñîäåðæàùèé ñòðóêòóðó ìåíþ
	- Çàäàéòå äëÿ ôóíêöèè âòîðîé àðãóìåíò $vertical ñî çíà÷åíèåì ïî óìîë÷àíèþ ðàâíûì TRUE. Äàííûé ïàðàìåòð óêàçûâàåò, êàêèì îáðàçîì áóäåò îòðèñîâàíî ìåíþ - âåðòèêàëüíî èëè ãîðèçîíòàëüíî
	
	ÇÀÄÀÍÈÅ 2
	- Îòêðîéòå ôàéë mod3\menu.php
	- Ñêîïèðóéòå êîä, êîòîðûé ñîçäàåò ìàññèâ $menu è âñòàâüòå ñêîïèðîâàííûé êîä â äàííûé äîêóìåíò
	- Ñêîïèðóéòå êîä, êîòîðûé îòðèñîâûâàåò ìåíþ
	- Âñòàâüòå ñêîïèðîâàííûé êîä â òåëî ôóíêöèè getMenu()
	- Èçìåíèòå êîä òàêèì îáðàçîì, ÷òîáû ìåíþ îòðèñîâûâàëàñü â çàâèñèìîñòè îò âõîäÿùèõ ïàðàìåòðîâ $menu è $vertical
	*/
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Меню</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Ìåíþ</h1>
	<?php

$newmenu=array(
		"Table"=>'table.php',
		"Array"=>'array.php',
		"For"=>'for.php',
		"Size"=>'size.php'


);

getMenu($newmenu,true);
getMenu($newmenu,false);

myCount($newmenu);
	/*
	ÇÀÄÀÍÈÅ 3
	- Îòðèñóéòå âåðòèêàëüíîå ìåíþ âûçûâàÿ ôóíêöèþ getMenu() ñ îäíèì ïàðàìåòðîì
	*/
	/*
	ÇÀÄÀÍÈÅ 4
	- Îòðèñóéòå ãîðèçîíòàëüíîå ìåíþ âûçûâàÿ ôóíêöèþ getMenu() ñî âòîðûì ïàðàìåòðîì ðàâíûì FALSE
	*/
	?>
</body>
</html>
