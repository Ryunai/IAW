<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicios PHP 6 </title>
</head>

<body>

<?php

/*	Autor: Anxo Garrote
	2ASIR - Implantacion de Aplicaciones Web
	Curso 2024 - 2025
*/

if (isset($_POST['enviar'])) {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    
    if (empty($nombre) || empty($email)) {
        echo "<p style='color: red'>Error: Todos los campos son obligatorios</p>";
    } else {
        echo "<h1>¡Bienvenido, $nombre!</h1>";
        echo "<p>Tu email registrado es: $email</p>";
    }
} else {
    header('Location: saludo.php');
    exit;
}
?>