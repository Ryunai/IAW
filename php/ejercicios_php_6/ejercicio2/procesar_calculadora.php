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

if (isset($_POST['calcular'])) {
    $num1 = filter_input(INPUT_POST, 'numero1', FILTER_SANITIZE_NUMBER_FLOAT);
    $num2 = filter_input(INPUT_POST, 'numero2', FILTER_SANITIZE_NUMBER_FLOAT);
    $operacion = htmlspecialchars($_POST['operacion']);
    
    $num1 = floatval($num1);
    $num2 = floatval($num2);
    
    switch ($operacion) {
        case 'suma':
            $resultado = $num1 + $num2;
            break;
        case 'resta':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicacion':
            $resultado = $num1 * $num2;
            break;
        case 'division':
            $resultado = ($num2 != 0) ? $num1 / $num2 : "Error: division por cero";
            break;
        default:
            $resultado = "Operacion no válida";
    }
    
    echo "<h3>Resultado: $num1 " . strtoupper($operacion) . " $num2 = $resultado</h3>";
} 
else {
	echo "<h3>No se ha enviado el formulario</h3>";
}

?>

</body>
</html>
