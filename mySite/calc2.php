<?php
// include "lib.inc.php";


if ($_SERVER["REQUEST_METHOD"]=="POST"){	//ПРОВЕРКА НА НАЛИЧИЕ ДАННЫХ ИЗ ФОРМЫ
	if (!empty($_POST["var1"]) and !empty($_POST["operator"]) and !empty($_POST["var2"])){   //ПРОВЕРКА НА ЗАПОЛНЕННОСТЬ ВСЕХ ПОЛЕЙ
		$var1='';
		$var2='';
		$operator='';
		$outString="$var1 $operator $var2";

		$var1=clearData($_POST["var1"]);       //ОЧИСТКА ДАННЫХ 
		$var2=clearData($_POST["var2"]);
		$operator=clearData($_POST["operator"]);

		$var1=$var1*1;       //ПРИВЕДЕНИЕ К ЧИЛОВОМУ ТИПУ
		$var2=$var2*1;
		


		switch ($operator){				//ДЕЙСТВИЕ В ЗАВИСИМОСТИ ОТ ВВЕДЕННОГО ОПЕРАТОРА
			case '+': $outString ="$outString".$var1+$var2;break;
			case "-":$outString.=$var1-$var2;break;
			case "/": 
				if (!$var2==0){
				$outString.=$var1/$var2;
				}else {
				$outString='На ноль делить нельзя';
				};break;
			case "*":$outString.=$var1*$var2;break;
			default :$outString='Введена недопустимая операция. Допустимые операци:"+","-","/","*"';
		}
		
	}else {
	$outString='Не все необходимые поля заполнены';	
	}
}	
?>

<div id='calForm' style="style.css">
	<h1 align="center">Калькулятор</h1>
	<form action="<?php echo $_SERVER['REQUEST_URI']?>" method="POST" >
		Число 1<input type="text" name="var1" value="<?php if (isset($var1)) echo $var1;?>"><br><br>
		Оператор<input type="text" name="operator" value="<?php if (isset($operator)) echo $operator;?>"><br><br>
		Число 2<input type="text" name="var2" value="<?php if (isset($var2)) echo $var2;?>"><br><br>
		<input type="submit" value="Рассчитать">
	</form>
</div>

<?php
if (isset($outString))
echo "Результат вычисления: ".$outString;
?>
