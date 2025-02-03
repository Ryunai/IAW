<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicios PHP 3 </title>
</head>

<body>

<?php

/*	Autor: Anxo Garrote
	2ASIR - Implantacion de Aplicaciones Web
	Curso 2024 - 2025
*/

/*
#### Ejercicio 12: Obtener detalles de la fecha
**Pseudocódigo:**
1. Usar `getdate()` para obtener información detallada de la fecha actual.
2. Mostrar el año, mes y día.
*/

//1. Usar `getdate()` para obtener información detallada de la fecha actual.
$fecha_actual = getdate();

//2. Mostrar el año, mes y día.
echo "Año: " . $fecha_actual["year"] . "<br>";

echo "Mes: " . $fecha_actual["mon"] . "<br>";

echo "Día: " . $fecha_actual["mday"] . "<br>";

?>

</body>
</html>
