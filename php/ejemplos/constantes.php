<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Practicas PHP </title>
</head>

<body>

<?php


const PI = 3.141592;

echo PI;

//Las siguientes lineas darian error ya que no se pueden modificar su valor
//	PI = PI + 1;
//	echo PI;
define ("NOMBRE","Pablo");
$nombre = "Pablo";
echo "<br>";
echo NOMBRE;
echo "<br>";
echo "La variable nombre vale: ".$nombre;
$nombre = $nombre." Iglesias";
echo "<br>";
echo "La variable nombre ahora vale: ".$nombre."<br>"." Pero la constante es: ".NOMBRE;





?>

</body>
</html>
