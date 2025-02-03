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
#### Ejercicio 10: Contar elementos de un array
**Pseudocódigo:**
1. Crear un array con elementos.
2. Usar `count` para obtener el número de elementos.
3. Mostrar el resultado.
*/

//1. Crear un array con elementos.
$elementos = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j");

//2. Usar `count` para obtener el número de elementos.
$numero_elementos = count($elementos);

//3. Mostrar el resultado.
echo "Número de elementos: " . $numero_elementos;

?>

</body>
</html>
