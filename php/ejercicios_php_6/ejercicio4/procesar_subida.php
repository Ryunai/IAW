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

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['archivo'])) {
    $directorio = 'uploads/';
    
    if (!file_exists($directorio)) {
        mkdir($directorio, 0777, true);
    }
    
    $archivo_temporal = $_FILES['archivo']['tmp_name'];
    $archivo_destino = $directorio . basename($_FILES['archivo']['name']);
    
    if ($_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        if (move_uploaded_file($archivo_temporal, $archivo_destino)) {
            echo "<p>Archivo subido correctamente: " . htmlspecialchars($_FILES['archivo']['name']) . "</p>";
        } else {
            echo "<p style='color: red'>Error al mover el archivo</p>";
        }
    } else {
        echo "<p style='color: red'>Error en la subida: Código " . $_FILES['archivo']['error'] . "</p>";
    }
} else {
    header('Location: subida.php');
    exit;
}
?>