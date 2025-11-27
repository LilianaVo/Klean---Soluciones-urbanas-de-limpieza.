<?php
// Datos de conexión
$host = "localhost";             
$usuario = "root";               
$password = "Klean2025*";        
$base_de_datos = "Eq3ServiciosLimpieza"; 

// Crear la conexión
$conn = new mysqli($host, $usuario, $password, $base_de_datos);

// Verificar si hubo error al conectar
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>