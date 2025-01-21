<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Practicas PHP </title>
</head>

<body>

<?php

	$navegadores = array("navegador1"=>"Chrome","navegador2"=>"Firefox","navegador3"=>"Safari");
	$datosPersonales = array("nombre"=>"Victor","edad"=>45,"profesor"=>true);
	echo "El navegador 3 es ".$navegadores["navegador3"]."<br>";
	echo "El nombre es ".$datosPersonales["nombre"]."<br>";
	echo "Es profesor? ".$datosPersonales["profesor"]."<br>";
	var_dump($navegadores);
	echo "<br>";
	var_dump($datosPersonales);


?>

</body>
</html>
