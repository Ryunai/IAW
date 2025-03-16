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

$usuario_valido = 'admin';
$contrasena_valida = '1234';

if (isset($_POST['ingresar'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    if ($usuario === $usuario_valido && $contrasena === $contrasena_valida) {
        echo "<h1>¡Bienvenido, $usuario!</h1>";
    } else {
        echo "<p style='color: red'>Error: Credenciales incorrectas</p>";
        echo "<a href='login.php'>Volver a intentar</a>";
    }
} else {
    header('Location: login.php');
    exit;
}
?>