<?php
	/*
		Простейший калькулятор
	*/
?>

<form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="POST">
	Число 1<input type="text" name="num1"/><br /><br />
	Оператор<input type="text" name="operator"/><br /><br />
	Число 2<input type="text" name="num2"/><br /><br />
	<input type="Submit" value="Рассчет"/><br /><br />
</form>


<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
	$num1;
	$num2;
	$output="";
	if (empty($_POST['num1']) or empty($_POST['num2']) or empty($_POST['operator'])){
		echo 'Введите все данные для вычисления';
	}else {
		$num1=trim(strip_tags($_POST['num1']));
		$num2=trim(strip_tags($_POST['num2']));
		$operator=trim(strip_tags($_POST['operator']));
		switch ($operator){
			case "+":$output=$num1+$num2;break;
			case "-":$output=$num1-$num2;break;
			case "/": if ($num2!=0) {
							$output=$num1/$num2;
							} else {
							echo 'На 0  делить нельзя';
							}; break;
			case "*":$output=$num1*$num2;break;
			default: echo 'Не введена операция';
				}
	}
	echo $output;
}
?>
