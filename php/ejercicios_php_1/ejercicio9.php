<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicios PHP 1 </title>
</head>

<body>

<?php

/*	Autor: Anxo Garrote
	2ASIR - Implantacion de Aplicaciones Web
	Curso 2024 - 2025
*/

// Crea una clase llamada Persona con las propiedades nombre y edad. Crea un objeto de esta clase y muestra sus valores.
//


	class Persona {
	// Propiedades
	//
	public $nombre;
	public $edad;

	// Constructor
	//
	public function __construct($nombre, $edad) {
		$this->nombre = $nombre;
		$this->edad = $edad;
		}

	// Método para mostrar los valores
	//
	public function mostrarValores() {
		echo "Nombre: " . $this->nombre . "<br>";
		echo "Edad: " . $this->edad . "<br>";
		}
	}

	// Crear un objeto de la clase Persona
	//
	$persona = new Persona("Juan", 30);

	// Mostrar los valores del objeto
	//
	$persona->mostrarValores();
?>

</body>
</html>
