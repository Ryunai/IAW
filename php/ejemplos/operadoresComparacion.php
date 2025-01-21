<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Practicas PHP </title>
</head>

<body>

<?php

	// Operadores Comparacion
	//
	$num1=5;
	$num2=10;
	$num3=5;
	$valor1="5";

	if($num1!=$num2){
		echo "num1 y num2 son distintos."."<br>";
	}

	if($num1!==$valor1) {
		echo "Los valores num1 y valor1 no son identicos."."<br>";
	}

	if($num1==$valor1) { 
		echo "Los valores num1 y valor1 son iguales."."<br>";
        }

?>

</body>
</html>
