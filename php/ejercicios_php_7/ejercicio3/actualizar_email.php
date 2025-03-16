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
    
    // Obtener y sanitizar datos
    $id = intval($_POST['id']);
    $nuevo_email = mysqli_real_escape_string($conexion, $_POST['email']);
    
    // Actualizar registro
    $sql = "UPDATE usuarios SET email = '$nuevo_email' WHERE id = $id";
    
    if (mysqli_query($conexion, $sql)) {
        $mensaje = "Email actualizado correctamente!";
    } else {
        $mensaje = "Error al actualizar: " . mysqli_error($conexion);
    }
    
    mysqli_close($conexion);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Email</title>
    <style>
        .form-container {max-width: 300px; margin: 20px; padding: 20px; border: 1px solid #ddd;}
        input {margin: 5px 0; padding: 5px; width: 100%;}
    </style>
</head>
<body>
    <h1>Actualizar Email de Usuario</h1>
    
    <div class="form-container">
        <?php if (isset($mensaje)): ?>
            <p style="color: <?= strpos($mensaje, 'Error') !== false ? 'red' : 'green' ?>"><?= $mensaje ?></p>
        <?php endif; ?>
        
        <form method="POST">
            <input type="number" name="id" placeholder="ID del usuario" required>
            <input type="email" name="email" placeholder="Nuevo correo electrónico" required>
            <button type="submit" style="margin-top: 10px; padding: 8px;">Actualizar</button>
        </form>
    </div>

</body>
</html>
Ejercicio 4: eliminar_usuario.php

php
Copy
<?php
/* Autor: Víctor Grande
2ºASIR - Implantación de Aplicaciones Web
Curso 2024-2025
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
    
    // Obtener y validar ID
    $id = intval($_POST['id']);
    
    // Eliminar registro
    $sql = "DELETE FROM usuarios WHERE id = $id";
    
    if (mysqli_query($conexion, $sql)) {
        $mensaje = "Usuario eliminado correctamente!";
    } else {
        $mensaje = "Error al eliminar: " . mysqli_error($conexion);
    }
    
    mysqli_close($conexion);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Usuario</title>
    <style>
        .form-container {max-width: 300px; margin: 20px; padding: 20px; border: 1px solid #ddd;}
        input {margin: 5px 0; padding: 5px; width: 100%;}
    </style>
</head>
<body>
    <h1>Eliminar Usuario</h1>
    
    <div class="form-container">
        <?php if (isset($mensaje)): ?>
            <p style="color: <?= strpos($mensaje, 'Error') !== false ? 'red' : 'green' ?>"><?= $mensaje ?></p>
        <?php endif; ?>
        
        <form method="POST">
            <input type="number" name="id" placeholder="ID del usuario a eliminar" required>
            <button type="submit" style="margin-top: 10px; padding: 8px;">Eliminar</button>
        </form>
    </div>

</body>
</html>