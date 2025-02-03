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
#### Ejercicio 9: Barajar arrays
**Pseudocódigo:**
1. Crear un array con letras.
2. Usar `shuffle` para barajar el array.
3. Mostrar el array barajado.
*/

//1. Crear un array con letras.
$letras = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j");

//2. Usar `shuffle` para barajar el array.
shuffle($letras);

//3. Mostrar el array barajado.
echo "Array barajado: ";
foreach ($letras as $valor) {
	echo $valor . " ";
}

?>

</body>
</html>
