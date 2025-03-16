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

?>
<!DOCTYPE html>
<html>
<head>
    <title>Subida de Archivos</title>
    <style>
        .form-container {max-width: 300px; margin: 20px; padding: 20px; border: 1px solid #ddd;}
    </style>
</head>
<body>
    <div class="form-container">
        <form method="POST" action="procesar_subida.php" enctype="multipart/form-data">
            <input type="file" name="archivo" required>
            <button type="submit">Subir Archivo</button>
        </form>
    </div>
</body>
</html>