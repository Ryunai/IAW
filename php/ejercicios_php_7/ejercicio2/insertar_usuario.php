<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicios PHP 7 </title>
</head>

<body>

<?php

/*	Autor: Anxo Garrote
	2ASIR - Implantacion de Aplicaciones Web
	Curso 2024 - 2025
*/

// Configuración de la base de datos
$host = 'localhost';
$usuario = 'root';
$clave = '';
$base_datos = 'crud_usuarios';

// Procesar formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conexion = mysqli_connect($host, $usuario, $clave, $base_datos);
    
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }
    
    // Escapar datos del formulario
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    
    // Insertar datos
    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
    
    if (mysqli_query($conexion, $sql)) {
        $mensaje = "Usuario registrado correctamente!";
    } else {
        $mensaje = "Error: " . mysqli_error($conexion);
    }
    
    mysqli_close($conexion);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuarios</title>
    <style>
        .form-container {max-width: 300px; margin: 20px; padding: 20px; border: 1px solid #ddd;}
        input {margin: 5px 0; padding: 5px; width: 100%;}
    </style>
</head>
<body>
    <h1>Registro de Nuevo Usuario</h1>
    
    <div class="form-container">
        <?php if (isset($mensaje)): ?>
            <p style="color: <?= strpos($mensaje, 'Error') !== false ? 'red' : 'green' ?>"><?= $mensaje ?></p>
        <?php endif; ?>
        
        <form method="POST">
            <input type="text" name="nombre" placeholder="Nombre completo" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <button type="submit" style="margin-top: 10px; padding: 8px;">Registrar</button>
        </form>
    </div>

</body>
</html>