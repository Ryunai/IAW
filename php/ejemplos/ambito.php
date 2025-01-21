<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Practicas PHP </title>
</head>

<body>

<?php

	$numeroGlobal = 10;
	$numeroGlobal2 = 20;

	function prueba() {
	$numeroLocal = 25;
	echo $numeroLocal;
	global $numeroGlobal, $numeroGlobal2;
	echo "<br>";
	$sumaLocal = $numeroGlobal + $numeroGlobal2;
	echo $sumaLocal;
	}

	prueba();
	echo"<br>";
	echo $numeroGlobal;

?>

</body>
</html>
