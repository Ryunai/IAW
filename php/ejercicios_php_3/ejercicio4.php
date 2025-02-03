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
#### Ejercicio 4: Diferencia entre parámetros por valor y referencia
**Pseudocódigo:**
1. Crear una función que reciba un número **por valor** y lo incremente.
2. Crear otra función que reciba un número **por referencia** y lo incremente.
3. Llama a ambas funciones y muestra la diferencia.
*/

// Función que incrementa un número por valor
//
function incrementarPorValor($numero){
	$numero++;
}

// Función que incrementa un número por referencia
//
function incrementarPorReferencia(&$numero){
	$numero++;
}

// Declaramos una variable con el valor 5
//
$numero = 5;

// Incrementamos el número por valor
//
echo "Número antes de incrementar por valor: $numero<br>";
incrementarPorValor($numero);
echo "Número después de incrementar por valor: $numero<br>";

// Incrementamos el número por referencia
//
echo "Número antes de incrementar por referencia: $numero<br>";
incrementarPorReferencia($numero);
echo "Número después de incrementar por referencia: $numero<br>";

?>

</body>
</html>
