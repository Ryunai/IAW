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
### **Funciones para trabajar con arrays**

#### Ejercicio 6: Comparar arrays
**Pseudocódigo:**
1. Crear dos arrays con números.
2. Usar `array_diff` para encontrar elementos del primer array que no están en el segundo.
3. Mostrar el resultado.
*/

// Creamos dos arrays con números
//
$primerArray = array(1, 2, 3, 4, 5);
$segundoArray = array(1, 2, 3, 6, 7);

// Usamos array_diff para encontrar elementos del primer array que no están en el segundo
//
$resultado = array_diff($primerArray, $segundoArray);

// Mostramos el resultado
//
echo "Elementos del primer array que no están en el segundo: ";
print_r($resultado);

?>

</body>
</html>
