<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicios PHP 1 </title>
</head>

<body>

<?php

/*	Autor: Anxo Garrote
	2ASIR - Implantacion de Aplicaciones Web
	Curso 2024 - 2025
*/

// Declara dos variables enteras y realiza operaciones basicas con ellas
//
	
	// Variables
	// 
	$num1 = 37;
	$num2 = 3;

	// (suma, resta, multiplicacion, division, resto, exponenciacion)
	//
	$totalSum = $num1 + $num2;	// $num1 + =$num2
	$totalSub = $num1 - $num2;	// $num1 - =$num2
	$totalMult = $num1 * $num2;	// $num1 * =$num2
	$totalDiv = $num1 / $num2;	// $num1 / =$num2
	$totalRest = $num1 % $num2;	// $num1 % =$num2
	$totalExp = $num1 ** $num2;	// $num1 ** =$num2

	// Mostrar Resultados
	//
	echo "Suma $num1 + $num2 = ".$totalSum."<br>";
	echo "Resta $num1 - $num2 = ".$totalSub."<br>";
	echo "Producto $num1 · $num2 = ".$totalMult."<br>"; // Caracter especial '00b7'
	echo "Division $num1 / $num2 = ".$totalDiv."<br>";
	echo "Resto de la division anterior = ".$totalRest."<br>";
	echo "Elevar $num1 a la potencia $num2 = ".$totalExp."<br>";

?>

</body>
</html>
