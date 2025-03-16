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
$conexion = mysqli_connect($host, $usuario, $clave, $base_datos);

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Determinar acción
$accion = isset($_GET['accion']) ? $_GET['accion'] : 'listar';
$mensaje = '';

// Procesar acciones
switch ($accion) {
    case 'insertar':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
            $email = mysqli_real_escape_string($conexion, $_POST['email']);
            
            $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
            if (mysqli_query($conexion, $sql)) {
                $mensaje = "Usuario insertado correctamente";
            } else {
                $mensaje = "Error al insertar: " . mysqli_error($conexion);
            }
        }
        break;
        
    case 'actualizar':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = intval($_POST['id']);
            $nuevo_email = mysqli_real_escape_string($conexion, $_POST['email']);
            
            $sql = "UPDATE usuarios SET email = '$nuevo_email' WHERE id = $id";
            if (mysqli_query($conexion, $sql)) {
                $mensaje = "Email actualizado correctamente";
            } else {
                $mensaje = "Error al actualizar: " . mysqli_error($conexion);
            }
        }
        break;
        
    case 'eliminar':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = intval($_POST['id']);
            
            $sql = "DELETE FROM usuarios WHERE id = $id";
            if (mysqli_query($conexion, $sql)) {
                $mensaje = "Usuario eliminado correctamente";
            } else {
                $mensaje = "Error al eliminar: " . mysqli_error($conexion);
            }
        }
        break;
}

// Obtener lista de usuarios para mostrar en todas las vistas
$usuarios = [];
$resultado = mysqli_query($conexion, "SELECT * FROM usuarios");
if ($resultado) {
    $usuarios = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema CRUD</title>
    <style>
        table { border-collapse: collapse; margin: 20px 0; }
        td, th { border: 1px solid #ddd; padding: 8px; }
        .form-container { margin: 20px 0; padding: 20px; border: 1px solid #ccc; }
    </style>
</head>
<body>
    <h1>Sistema CRUD de Usuarios</h1>
    
    <nav>
        <a href="?accion=listar">Listar usuarios</a> | 
        <a href="?accion=insertar">Nuevo usuario</a> | 
        <a href="?accion=actualizar">Actualizar email</a> | 
        <a href="?accion=eliminar">Eliminar usuario</a>
    </nav>

    <?php if ($mensaje): ?>
        <div class="mensaje"><?= $mensaje ?></div>
    <?php endif; ?>

    <?php switch ($accion):
        case 'insertar': ?>
            <div class="form-container">
                <h2>Nuevo usuario</h2>
                <form method="POST">
                    <input type="text" name="nombre" placeholder="Nombre" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <button type="submit">Guardar</button>
                </form>
            </div>
            <?php break;
        
        case 'actualizar': ?>
            <div class="form-container">
                <h2>Actualizar email</h2>
                <form method="POST">
                    <input type="number" name="id" placeholder="ID del usuario" required>
                    <input type="email" name="email" placeholder="Nuevo email" required>
                    <button type="submit">Actualizar</button>
                </form>
            </div>
            <?php break;
        
        case 'eliminar': ?>
            <div class="form-container">
                <h2>Eliminar usuario</h2>
                <form method="POST">
                    <input type="number" name="id" placeholder="ID del usuario" required>
                    <button type="submit">Eliminar</button>
                </form>
            </div>
            <?php break;
        
        default: ?>
            <h2>Listado de usuarios</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                </tr>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $usuario['id'] ?></td>
                    <td><?= $usuario['nombre'] ?></td>
                    <td><?= $usuario['email'] ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
    <?php endswitch; ?>

</body>
</html>

<?php
// Cerrar conexión
mysqli_close($conexion);
?>



</body>
</html>
