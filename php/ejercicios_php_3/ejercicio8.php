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
#### Ejercicio 8: Ordenar arrays
**Pseudocódigo:**
1. Crear un array desordenado.
2. Usar `sort` para ordenarlo.
3. Mostrar el array ordenado.
*/

//1. Crear un array desordenado.
$desordenado = array(4, 6, 2, 22, 11, 9, 1, 3, 5, 7, 8, 10);

//2. Usar `sort` para ordenarlo.
sort($desordenado);

//3. Mostrar el array ordenado.
echo "Array ordenado: ";
foreach ($desordenado as $valor) {
	echo $valor . " ";
}

?>

</body>
</html>
