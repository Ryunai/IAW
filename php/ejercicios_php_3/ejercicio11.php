<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicios PHP 2 </title>
</head>

<body>

<?php

/*	Autor: Anxo Garrote
	2ASIR - Implantacion de Aplicaciones Web
	Curso 2024 - 2025
*/

/*
#### Ejercicio 11: Obtener la fecha actual
**Pseudocódigo:**
1. Usar `date("d-m-Y")` para obtener la fecha actual en formato `dd-mm-yyyy`.
2. Mostrar la fecha.
*/

//1. Usar `date("d-m-Y")` para obtener la fecha actual en formato `dd-mm-yyyy`.
$fecha_actual = date("d-m-Y");

//2. Mostrar la fecha.
echo "Fecha actual: " . $fecha_actual;

?>

</body>
</html>
