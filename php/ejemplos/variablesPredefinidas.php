<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Practicas PHP </title>
</head>

<body>

<?php

	$numero = 231;


	echo "Nombre del servidor ".$_SERVER['SERVER_NAME'];
	echo "<br>";
	echo "El software de nuestro servidor es ".$_SERVER['SERVER_SOFTWARE'];
	echo "<br>";
	echo "Apache nos sirve la pagina a traves del puerto ".$_SERVER['SERVER_PORT'];
	echo "<br>";
	echo "La variable numero es: ".$GLOBALS['numero'];
	echo "<br>";
	echo "Mi nombre es: ".$GLOBALS['nombre'];

?>

</body>
</html>
