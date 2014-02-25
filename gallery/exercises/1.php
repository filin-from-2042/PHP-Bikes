<?php
function speed ($S,$t,$unitoutput='km/h'){											
	//$S=trim(strip_tags($S));
	//$t=trim(strip_tags($t));
	$a=strpbrk($S,"k");
	$b="km";
	$c=strpbrk($S,"m");
	$d="m";
	if ($a==$b)	$unitspeed="km";
	if ($c==$d)	$unitspeed='m';
	//echo 'Неправильный формат введенных данных расстояния<br>';
	//return 0;
	echo var_dump($a);
	echo var_dump($c).'<br>';

	if (strpbrk($t,'h')=='h'){
	$unittime='h';
	}elseif (strpbrk($t,'m')=='m'){
	$unittime='m';
	}else{
	echo 'Неправильный формат данных времени<br>';
	}
	echo $unittime.'<br>';
	$S=$S*1;
	$t=$t*1;

	switch ($unitoutput){																//в зависимости от требуемых единиц измерения вывода вычисляем результат
		case 'km/h': if ($unitspeed=='km' and $unittime=='h'){
						$speed=$S/$t;
						}elseif ($unitspeed=='km' and $unittime=='m'){
						$speed=$S/($t/60);
						}elseif ($unitspeed=='m' and $unittime=='h'){
						$speed=($S/1000)/($t);
						}else{															//$unitspeed='m' and $unittime='m'
						$speed=($S/1000)/($t/60);
						};break;
		case 'km/s': if ($unitspeed=='km' and $unittime=='h'){
						$speed=$S/($t*60*60);
						}elseif ($unitspeed=='km' and $unittime=='m'){
						$speed=$S/($t*60);
						}elseif ($unitspeed=='m' and $unittime=='h'){
						$speed=($S/1000)/($t*60*60);
						}else{															//$unitspeed='m' and $unittime='m'
						$speed=($S/1000)/($t*60);
						};break;
		case 'm/h': if ($unitspeed=='km' and $unittime=='h'){
						$speed=($S*1000)/$t;
						}elseif ($unitspeed=='km' and $unittime=='m'){
						$speed=($S*1000)/($t/60);
						}elseif ($unitspeed=='m' and $unittime=='h'){
						$speed=($S)/($t);
						}else{															//$unitspeed='m' and $unittime='m'
						$speed=($S/1000)/($t*60);
						};break;
		case 'm/s': if ($unitspeed=='km' and $unittime=='h'){
						$speed=($S*60)/($t*60*60);
						}elseif ($unitspeed=='km' and $unittime=='m'){
						$speed=($S*60)/($t*60);
						}elseif ($unitspeed=='m' and $unittime=='h'){
						$speed=$S/($t*60*60);
						}else{															//$unitspeed='m' and $unittime='m'
						$speed=$S/($t*60);
						};break;
			default: echo 'Неправильно указан формат вывода данных вычисления<br>';
	}
		
echo "Расстояние $S $unitspeed за $t $unittime пройдено со скоростью $speed $unitoutput<br>";
echo "$a";

}

speed('4000m','2m','km/h');
?>