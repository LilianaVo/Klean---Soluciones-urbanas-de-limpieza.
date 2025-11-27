<?php
include 'conexion.php';

// 1. Recibimos los datos del formulario
$nombre = $_POST['nombre_cliente']; 
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$tipo = $_POST['tipo_servicio'];
$plan = $_POST['plan'];

// 2. Insertamos en la Base de Datos
$sql = "INSERT INTO solicitudes (nombre, email, telefono, tipo_servicio, plan) VALUES ('$nombre', '$email', '$telefono', '$tipo', '$plan')";

$guardado = mysqli_query($conexion, $sql);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud Recibida - Klean</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
        
        .mensaje-container {
            min-height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px;
            background: white;
            margin-top: 50px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            max-width: 600px;
        }
        .success-icon {
            width: 80px;
            height: 80px;
            background: #00c897;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            margin-bottom: 20px;
            box-shadow: 0 10px 20px rgba(0, 200, 151, 0.3);
        }
        h1.subtitle { color: #004e92; font-family: 'Montserrat', sans-serif; font-weight: 800; }
        
        .cta {
            display: inline-block;
            padding: 12px 25px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
            background-color: #0f172a;
            color: white;
        }
        .cta:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(0,0,0,0.2); }
    </style>
</head>
<body>
    <header class="hero" style="height: auto; min-height: auto; padding: 15px 0; background: #004e92;">
        <nav class="nav container" style="padding: 0;">
            <div class="nav__logo">
                <h2 class="nav__title" style="color: white; margin: 0;">Klean.</h2>
            </div>
        </nav>
    </header>

    <div class="container" style="display:flex; justify-content:center;">
        <main class="mensaje-container">
            <?php if ($guardado) { ?>
                <div class="success-icon">✓</div>
                <h1 class="subtitle">¡Solicitud Recibida!</h1>
                
                <p class="about__paragraph" style="color: #64748b; margin-bottom: 30px;">
                    Gracias <strong><?php echo $nombre; ?></strong>.<br><br>
                    Hemos enviado una confirmación a: <br>
                    <strong style="color: #004e92;"><?php echo $email; ?></strong>
                    <br><br>
                    Registramos tu interés en el servicio <strong><?php echo $tipo; ?></strong> (Plan <?php echo $plan; ?>).
                    Un asesor te contactará al <strong><?php echo $telefono; ?></strong>.
                </p>
                
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="reporte.php" class="cta" style="background-color: #004e92;">Ver en Admin</a>
                    <a href="index.php" class="cta" style="background-color: transparent; color: #64748b; border: 1px solid #cbd5e1;">Volver al Inicio</a>
                </div>

            <?php } else { ?>
                <div class="success-icon" style="background: #ef4444; box-shadow: 0 10px 20px rgba(239, 68, 68, 0.3);">✕</div>
                <h1 class="subtitle" style="color: #ef4444;">Hubo un error</h1>
                <p style="color: #64748b;">No se pudo guardar la solicitud en la base de datos.</p>
                
                <p style="font-size: 0.8rem; color: #94a3b8; word-break: break-all;">
                    Error técnico: <?php echo mysqli_error($conexion); ?>
                </p>
                
                <a href="index.php" class="cta">Intentar de nuevo</a>
            <?php } ?>
        </main>
    </div>

    <footer class="footer" style="margin-top: 50px; padding: 20px 0; background: #0f172a; color: white; text-align: center;">
        <section class="container">
            <h3 class="footer__copyright" style="font-size: 0.9rem; margin: 0;">&copy; 2025 Equipo 3 Klean</h3>
        </section>
    </footer>
    
    <?php mysqli_close($conexion); ?>
</body>
</html>