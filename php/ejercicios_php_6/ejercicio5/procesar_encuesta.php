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
    // Sanitizar entradas
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $genero = isset($_POST['genero']) ? htmlspecialchars($_POST['genero']) : "No especificado";
    $intereses = isset($_POST['intereses']) ? $_POST['intereses'] : [];
    $comentarios = htmlspecialchars($_POST['comentarios']);

    // Validar campos obligatorios
    if (empty($nombre) || empty($email)) {
        die("Error: Nombre y email son campos obligatorios");
    }

    // Mostrar resultados
    echo "<h3>Resumen de la encuesta:</h3>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Género:</strong> $genero</p>";
    
    echo "<p><strong>Intereses:</strong> ";
    echo (!empty($intereses)) ? implode(", ", array_map('htmlspecialchars', $intereses)) : "Ninguno seleccionado";
    echo "</p>";
    
    echo "<p><strong>Comentarios:</strong> " . nl2br($comentarios) . "</p>";
} 
else {
	echo "<h3>No se ha enviado el formulario</h3>";
}

?>

</body>
</html>
