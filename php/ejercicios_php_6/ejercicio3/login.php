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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Location: procesar_login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        .form-container {max-width: 300px; margin: 20px; padding: 20px; border: 1px solid #ddd;}
        input {margin: 5px 0; padding: 5px; width: 100%;}
    </style>
</head>
<body>
    <div class="form-container">
        <form method="POST" action="procesar_login.php">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit" name="ingresar">Ingresar</button>
        </form>
    </div>
</body>
</html>