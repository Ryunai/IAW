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
    header('Location: procesar_saludo.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Saludo</title>
    <style>
        .form-container {max-width: 300px; margin: 20px; padding: 20px; border: 1px solid #ddd;}
        input {margin: 5px 0; padding: 5px; width: 100%;}
    </style>
</head>
<body>
    <div class="form-container">
        <form method="POST" action="procesar_saludo.php">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="email" placeholder="Email" required>
            <button type="submit" name="enviar">Enviar</button>
        </form>
    </div>
</body>
</html>