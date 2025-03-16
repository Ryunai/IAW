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

// Establecer conexión
$conexion = mysqli_connect($host, $usuario, $clave, $base_datos);

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Consulta SQL
$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Listado de Usuarios</title>
    <style>
        table {border-collapse: collapse; margin: 20px 0;}
        th, td {border: 1px solid #ddd; padding: 8px;}
        th {background-color: #f2f2f2;}
    </style>
</head>
<body>
    <h1>Listado de Usuarios</h1>
    
    <?php if (mysqli_num_rows($resultado) > 0): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
            <?php while($fila = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?= $fila['id'] ?></td>
                <td><?= $fila['nombre'] ?></td>
                <td><?= $fila['email'] ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No hay usuarios registrados</p>
    <?php endif; ?>

</body>
</html>

<?php
// Cerrar conexión
mysqli_close($conexion);
?>