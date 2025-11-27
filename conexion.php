<?php
/**
 * ARCHIVO DE CONEXIÓN UNIVERSAL (XAMPP / AppServ / WAMP)
 * * Este script intenta conectarse automáticamente probando las credenciales
 * más comunes 
 */

$host = "localhost";
$base_de_datos = "Eq3ServiciosLimpieza";
$usuario = "root";

// LISTA DE CONTRASEÑAS A PROBAR (Prioridad Alta -> Baja)
$posibles_passwords = [
    "Klean2025*",    // 1. contraseña (XAMPP Desarrollo)
    "12345678",      
    "",              // 3. Contraseña vacía (XAMPP/WAMP por defecto)
    "root",          
    "admin"          
];

$conn = null;
$conectado = false;
$error_detalle = "";

// BUCLE DE CONEXIÓN INTELIGENTE
foreach ($posibles_passwords as $password) {
    // Usamos @ para suprimir warnings de PHP mientras probamos
    try {
        $conn = @new mysqli($host, $usuario, $password, $base_de_datos);
        
        if (!$conn->connect_errno) {
            $conectado = true;
            // Si conecta, rompemos el bucle y nos quedamos con esta conexión
            break; 
        } else {
            // Guardamos el último error por si acaso
            $error_detalle = $conn->connect_error;
        }
    } catch (Exception $e) {
        $error_detalle = $e->getMessage();
    }
}

// VERIFICACIÓN FINAL Y REPORTE DE ERROR PARA EL PROFESOR
if (!$conectado) {
    // Diseño de error 
    echo "<div style='background-color: #fee2e2; color: #991b1b; padding: 25px; border: 1px solid #ef4444; font-family: Arial, sans-serif; max-width: 800px; margin: 30px auto; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);'>";
    echo "<h2 style='margin-top:0;'>⚠️ Atención: Error de Conexión a Base de Datos</h2>";
    echo "<p>El sistema de autodeteción probó 5 credenciales estándar (incluyendo AppServ default) y ninguna funcionó.</p>";
    echo "<hr style='border-color: #fca5a5;'>";
    echo "<h3 style='margin-bottom:10px;'>Instrucciones para el Evaluador:</h3>";
    echo "<p>Si usted utiliza una configuración personalizada en su gestor de BD (AppServ, Workbench, etc.), por favor realice lo siguiente:</p>";
    echo "<ol>";
    echo "<li>Abra el archivo <code>conexion.php</code> en este directorio.</li>";
    echo "<li>Vaya a la <strong>línea 16</strong> (Array <code>\$posibles_passwords</code>).</li>";
    echo "<li>Agregue su contraseña local a la lista.</li>";
    echo "</ol>";
    echo "<p style='font-size: 0.9em; color: #7f1d1d;'><em>Detalle técnico del último intento: " . $error_detalle . "</em></p>";
    echo "</div>";
    
    // Detener la ejecución para no mostrar errores de PHP feos después
    die();
}

// Configuración de caracteres (Importante para acentos)
$conn->set_charset("utf8");

?>