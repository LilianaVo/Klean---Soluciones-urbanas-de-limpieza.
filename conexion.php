<?php
// conexion.php
$servidor = "localhost";
$usuario = "root";
$password = "Klean2025*"; // En XAMPP por defecto la contraseña está vacía
$bd = "Eq3Klean"; // <--- AQUÍ ESTABA EL ERROR. Debe ser Eq3Klean

$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

// Verificar conexión (esto ayuda a ver si hay errores)
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Esta línea es importante para que los acentos (ñ, á, é) se guarden bien
mysqli_set_charset($conexion, "utf8");
?>