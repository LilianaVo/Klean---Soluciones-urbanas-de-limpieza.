<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizar Servicio - Klean</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    
    <style>
        /* REQUISITO: Estilo específico para esta página */
        body {
            background-color: #f2f2f2;
        }
        .form-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            max-width: 600px;
            margin: 60px auto;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: var(--color-title);
        }
        input[type="text"], input[type="tel"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn-submit {
            background-color: var(--color-cta);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 1.2rem;
        }
        .btn-submit:hover {
            background-color: #3636a0;
        }
        .demo-image {
            text-align: center;
            margin-bottom: 20px;
        }
        .demo-image img {
            max-width: 100%;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }
        .demo-image img:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body>

    <nav class="nav container" style="background:white; height: 70px;">
        <div class="nav__logo">
            <a href="index.php" style="text-decoration: none;"><h2 class="nav__title">Klean.</h2></a>
        </div>
    </nav>

    <section class="form-container">
        <h2 class="subtitle" style="margin-bottom: 20px;">Solicita tu Cotización</h2>
        <p style="margin-bottom: 30px; text-align: center;">Completa el formulario para recibir una propuesta personalizada.</p>

        <!-- REQUISITO: Función JS para modificar aspecto de imagen -->
        <div class="demo-image">
            <p><small>Da clic en la imagen para ver el "Efecto Klean"</small></p>
            <!-- CAMBIO: Inicia con 'cleanoffice.jpg' -->
            <img id="imagenDemo" src="./images/cleanoffice.jpg" alt="Oficina" onclick="limpiarOficina()">
        </div>

        <!-- Formulario -->
        <form action="guardar.php" method="POST">
            
            <div class="form-group">
                <label for="nombre">Nombre del Solicitante:</label>
                <input type="text" name="nombre" id="nombre" required placeholder="Ej. Juan Pérez">
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono de Contacto:</label>
                <input type="tel" name="telefono" id="telefono" required placeholder="(55) 1234 5678">
            </div>

            <div class="form-group">
                <label for="ciudad">Ciudad:</label>
                <select name="ciudad" id="ciudad">
                    <option value="CDMX">Ciudad de México</option>
                    <option value="MTY">Monterrey</option>
                    <option value="GDL">Guadalajara</option>
                    <option value="QRO">Querétaro</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tipo de Servicio:</label>
                <div style="display: flex; gap: 20px;">
                    <div>
                        <input type="radio" id="residencial" name="tipo_servicio" value="Residencial" checked>
                        <label for="residencial" style="display:inline; font-weight:normal;">Hogar</label>
                    </div>
                    <div>
                        <input type="radio" id="empresarial" name="tipo_servicio" value="Empresarial">
                        <label for="empresarial" style="display:inline; font-weight:normal;">Empresarial</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Extras Requeridos:</label>
                <div>
                    <input type="checkbox" id="insumos" name="extras_insumos" value="1">
                    <label for="insumos" style="display:inline; font-weight:normal;">Incluir Insumos de limpieza</label>
                </div>
                <div>
                    <input type="checkbox" id="factura" name="extras_factura" value="1">
                    <label for="factura" style="display:inline; font-weight:normal;">Requiero Factura (+16%)</label>
                </div>
            </div>

            <button type="submit" class="btn-submit">Enviar Datos</button>

        </form>
    </section>

    <!-- REQUISITO: JavaScript Actualizado -->
    <script>
        function limpiarOficina() {
            var imagen = document.getElementById('imagenDemo');
            
            // Lógica: Si la imagen actual tiene "cleanoffice", cambia a "cleaning"
            if(imagen.src.includes('cleanoffice.jpg')) {
                imagen.src = './images/cleaning.png'; // Imagen B
                alert("¡Así quedará tu espacio con Klean!");
            } else {
                imagen.src = './images/cleanoffice.jpg'; // Imagen A (Regresa a la original)
            }
        }
    </script>

</body>
</html>