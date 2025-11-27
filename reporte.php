<?php
include 'conexion.php';

// CONSULTA ACTUALIZADA: Apunta a la tabla 'solicitudes' y ordena por fecha descendente (lo nuevo arriba)
$sql = "SELECT * FROM solicitudes ORDER BY id DESC";
$resultado = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Klean Corp</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #1e293b;
            --accent: #3b82f6;
            --bg: #f1f5f9;
            --text: #334155;
            --secondary-klean: #00c897; /* Verde Tecnológico */
        }
        
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        
        body { display: flex; background-color: var(--bg); height: 100vh; overflow: hidden; }
        
        /* SIDEBAR */
        .sidebar { width: 260px; background-color: #0f172a; color: white; display: flex; flex-direction: column; padding: 20px; flex-shrink: 0; }
        .brand { font-size: 1.5rem; font-weight: 700; margin-bottom: 40px; display: flex; align-items: center; gap: 10px; }
        .menu-item { padding: 15px; margin-bottom: 5px; border-radius: 8px; color: #94a3b8; text-decoration: none; display: flex; align-items: center; gap: 12px; font-weight: 500; transition: 0.3s; }
        .menu-item:hover, .menu-item.active { background-color: #1e293b; color: white; }
        .menu-item i { width: 20px; }
        
        .logout { margin-top: auto; background: #334155; color: #f87171; }
        .logout:hover { background: #ef4444; color: white; }

        /* MAIN CONTENT */
        .main { flex: 1; padding: 30px; overflow-y: auto; }
        .header { margin-bottom: 30px; }
        .header h2 { color: #0f172a; font-weight: 700; }
        .header p { color: #64748b; font-size: 0.9rem; }

        /* METRICAS */
        .metrics { display: flex; gap: 20px; margin-bottom: 30px; }
        .card-metric { background: white; padding: 20px; border-radius: 12px; flex: 1; display: flex; align-items: center; gap: 20px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); }
        .icon-box { width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; }
        
        /* TABLA */
        .table-container { background: white; border-radius: 12px; padding: 20px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); }
        .table-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .btn-print { background: white; border: 1px solid #cbd5e1; padding: 8px 15px; border-radius: 6px; cursor: pointer; font-weight: 600; color: #475569; }
        
        table { width: 100%; border-collapse: collapse; }
        th { text-align: left; padding: 15px; color: #64748b; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; border-bottom: 1px solid #e2e8f0; }
        td { padding: 15px; color: #334155; font-size: 0.9rem; border-bottom: 1px solid #f1f5f9; vertical-align: middle; }
        
        .badge { padding: 4px 10px; border-radius: 50px; font-size: 0.75rem; font-weight: 600; display: inline-block; }
        .bg-premium { background: #dbeafe; color: #1d4ed8; }
        
        /* NUEVO ESTILO: Plan Estándar */
        .bg-estandar { 
            background: #ccfbf1; 
            color: var(--secondary-klean); 
        }
        
        .bg-basico { background: #f1f5f9; color: #64748b; }
        
        .status-dot { height: 8px; width: 8px; background-color: #22c55e; border-radius: 50%; display: inline-block; margin-right: 6px; }
        
        .contact-info { font-weight: 600; display: block; }
        .email-small { font-size: 0.8rem; color: #94a3b8; font-weight: 400; }

        /* Iconos de servicio */
        .service-icon { margin-right: 8px; color: #94a3b8; }
    </style>
</head>
<body>

    <aside class="sidebar">
        <div class="brand">
            <i class="fas fa-cube"></i> Klean.Corp
        </div>
        <a href="#" class="menu-item active"><i class="fas fa-table"></i> Solicitudes</a>
        <a href="#" class="menu-item"><i class="fas fa-users"></i> Clientes</a>
        <a href="#" class="menu-item"><i class="fas fa-chart-pie"></i> Analíticas</a>
        <a href="#" class="menu-item"><i class="fas fa-cog"></i> Configuración</a>
        
        <a href="index.php" class="menu-item logout"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
    </aside>

    <main class="main">
        <div class="header">
            <h2>Panel de Control</h2>
            <p>Bienvenido, Admin. Aquí están las solicitudes recibidas en tiempo real.</p>
        </div>

        <div class="metrics">
            <div class="card-metric">
                <div class="icon-box" style="background:#e0f2fe; color:#0284c7;"><i class="fas fa-inbox"></i></div>
                <div>
                    <h3 style="font-size:1.5rem; font-weight:700;"><?php echo mysqli_num_rows($resultado); ?></h3>
                    <p style="font-size:0.85rem; color:#64748b;">Solicitudes Totales</p>
                </div>
            </div>
            <div class="card-metric">
                <div class="icon-box" style="background:#dcfce7; color:#16a34a;"><i class="fas fa-check-circle"></i></div>
                <div>
                    <h3 style="font-size:1.5rem; font-weight:700;">100%</h3>
                    <p style="font-size:0.85rem; color:#64748b;">Base de Datos Conectada</p>
                </div>
            </div>
            <div class="card-metric">
                <div class="icon-box" style="background:#fef9c3; color:#ca8a04;"><i class="fas fa-clock"></i></div>
                <div>
                    <h3 style="font-size:1.5rem; font-weight:700;">24h</h3>
                    <p style="font-size:0.85rem; color:#64748b;">Tiempo Promedio</p>
                </div>
            </div>
        </div>

        <div class="table-container">
            <div class="table-header">
                <h3>Solicitudes Recientes</h3>
                <button class="btn-print" onclick="window.print()"><i class="fas fa-print"></i> Imprimir Reporte</button>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente / Organización</th>
                        <th>Contacto</th> <th>Servicio</th>
                        <th>Nivel Plan</th>
                        <th>Fecha Registro</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if ($resultado) {
                        while ($row = mysqli_fetch_array($resultado)) { 
                    ?>
                        <tr>
                            <td>#<?php echo $row['id']; ?></td>
                            <td>
                                <span class="contact-info"><?php echo $row['nombre']; ?></span>
                            </td>
                            <td>
                                <div style="font-weight:600; font-size:0.9rem;"><?php echo $row['telefono']; ?></div>
                                <div class="email-small"><?php echo $row['email']; ?></div>
                            </td>
                            <td>
                                <?php 
                                    // Icono dinámico según servicio
                                    $icono = "fa-building";
                                    if($row['tipo_servicio'] == 'Casa') $icono = "fa-home";
                                    if($row['tipo_servicio'] == 'Industrial') $icono = "fa-industry";
                                    if($row['tipo_servicio'] == 'Escuela') $icono = "fa-school";
                                ?>
                                <i class="fas <?php echo $icono; ?> service-icon"></i>
                                <?php echo $row['tipo_servicio']; ?>
                            </td>
                            <td>
                                <?php 
                                    // Lógica para el nuevo Plan Estándar
                                    if($row['plan'] == 'Premium') { 
                                ?>
                                    <span class="badge bg-premium">★ Premium</span>
                                <?php 
                                    } elseif($row['plan'] == 'Estandar') { 
                                ?>
                                    <span class="badge bg-estandar">Estándar</span>
                                <?php 
                                    } else { 
                                ?>
                                    <span class="badge bg-basico">Básico</span>
                                <?php 
                                    } 
                                ?>
                            </td>
                            <td><?php echo $row['fecha']; ?></td>
                            <td><span class="status-dot"></span>Activo</td>
                        </tr>
                    <?php 
                        } 
                    } else {
                        echo "<tr><td colspan='7' style='text-align:center; padding:20px;'>No se encontraron datos o la tabla no existe.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>