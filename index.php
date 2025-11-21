<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klean | Facility Services & Mantenimiento Integral</title>
    
    <link rel="shortcut icon" href="./images/favicon.png" type="image/png">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- ESTILOS CORPORATIVOS BLINDADOS 7.0 (FINAL) --- */
        
        :root {
            --primary: #004e92;      /* Azul Royal Profundo */
            --secondary: #00c897;    /* Verde Tecnológico */
            --dark: #0f172a;         /* Negro Azulado (Moderno) */
            --text: #334155;         /* Gris Pizarra */
            --light: #f8fafc;        /* Blanco Hielo */
            --accent: #f59e0b;       /* Dorado/Naranja para detalles */
        }

        * { box-sizing: border-box; }

        body { 
            font-family: 'Inter', sans-serif; 
            background-color: #fff; 
            color: var(--text); 
            margin: 0; padding: 0;
            overflow-x: hidden; 
            line-height: 1.6;
        }

        h1, h2, h3, h4, .nav__title, .btn { font-family: 'Montserrat', sans-serif; }
        a { text-decoration: none; }
        ul { list-style: none; padding: 0; margin: 0; }

        /* --- NAV --- */
        .nav { 
            background: rgba(255, 255, 255, 0.98); 
            padding: 15px 0; 
            position: fixed; 
            width: 100%; 
            top: 0; left: 0; 
            z-index: 1000; 
            box-shadow: 0 4px 20px rgba(0,0,0,0.05); 
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        
        .container-nav {
            width: 90%; max-width: 1200px; margin: 0 auto;
            display: flex; justify-content: space-between; align-items: center;
        }

        .nav__title { font-size: 1.6rem; color: var(--primary); font-weight: 800; letter-spacing: -0.5px; }
        .nav__title span { color: var(--secondary); }
        
        .nav__menu { display: flex; align-items: center; gap: 30px; }
        .nav__link { color: var(--dark); font-weight: 600; font-size: 0.9rem; transition: 0.3s; text-transform: uppercase; letter-spacing: 0.5px; }
        .nav__link:hover { color: var(--primary); }
        
        /* Dropdown Equipo */
        .dropdown { position: relative; display: inline-block; }
        .dropbtn { background-color: #f1f5f9; color: var(--dark); padding: 8px 18px; font-size: 0.8rem; border: none; cursor: pointer; border-radius: 6px; font-weight: 700; transition: 0.3s; }
        .dropdown:hover .dropbtn { background-color: var(--primary); color: white; }
        .dropdown-content { display: none; position: absolute; right: 0; background-color: white; min-width: 220px; box-shadow: 0px 10px 30px rgba(0,0,0,0.15); z-index: 1; border-radius: 8px; overflow: hidden; border: 1px solid #eee; }
        .dropdown-content a { color: var(--text); padding: 12px 20px; text-decoration: none; display: block; font-size: 0.85rem; border-bottom: 1px solid #f8f8f8; }
        .dropdown-content a:hover { background-color: #f8fafc; color: var(--primary); }
        .dropdown:hover .dropdown-content { display: block; }

        .btn-intranet { 
            background: var(--dark); color: white !important; 
            padding: 10px 25px; border-radius: 6px; font-size: 0.8rem; 
            transition: 0.3s; display: inline-block; font-weight: 600;
        }
        .btn-intranet:hover { background: var(--secondary); transform: translateY(-2px); box-shadow: 0 5px 15px rgba(0,200,151,0.3); }

        /* --- HERO --- */
        .hero {
            margin-top: 70px; padding: 140px 0;
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.9) 0%, rgba(30, 58, 138, 0.85) 100%), url('./images/hero_bg.jpg');
            background-size: cover; background-position: center; background-attachment: fixed;
            min-height: 85vh; display: flex; align-items: center; justify-content: center;
            text-align: center; color: white;
        }
        /* El badge con el icono de México */
        .hero-badge { background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); padding: 6px 20px; border-radius: 50px; font-size: 0.8rem; letter-spacing: 1px; text-transform: uppercase; display: inline-flex; align-items: center; gap: 10px; margin-bottom: 25px; color: #fff; font-weight: 600; }
        
        .hero h1 { font-size: 3.5rem; line-height: 1.1; margin-bottom: 25px; font-weight: 800; text-shadow: 0 10px 30px rgba(0,0,0,0.3); color: white; }
        .hero p { font-size: 1.2rem; max-width: 750px; margin: 0 auto 45px; font-weight: 300; opacity: 0.9; color: rgba(255,255,255,0.9); }

        /* --- BOTONES --- */
        .btn { display: inline-block; padding: 16px 35px; border-radius: 6px; font-weight: 700; transition: all 0.3s; cursor: pointer; border: none; font-size: 0.95rem; letter-spacing: 0.5px; }
        .btn-primary { background: var(--secondary); color: white; box-shadow: 0 10px 25px rgba(0,200,151,0.25); }
        .btn-primary:hover { background: #00b085; transform: translateY(-3px); box-shadow: 0 15px 30px rgba(0,200,151,0.35); }
        .btn-outline { background: transparent; border: 2px solid rgba(255,255,255,0.3); color: white; margin-left: 15px; }
        .btn-outline:hover { background: white; color: var(--primary); border-color: white; }

        /* --- SECCIONES --- */
        .section-padding { padding: 100px 0; }
        .bg-light { background-color: var(--light); }
        .container { width: 90%; max-width: 1200px; margin: 0 auto; }
        
        .section-title { text-align: center; margin-bottom: 70px; }
        .section-title h2 { color: var(--dark); font-size: 2.5rem; margin-bottom: 15px; font-weight: 800; }
        .section-title p { color: #64748b; font-size: 1.1rem; max-width: 600px; margin: 0 auto; }
        .section-title .subtitle { color: var(--primary); font-size: 0.9rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 10px; }

        /* --- CARDS (DIVISIONES) --- */
        /* CUADRÍCULA ACTUALIZADA A 4 COLUMNAS Y ESTILOS MÁS COMPACTOS */
        .grid-4 { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); 
            gap: 30px; 
        }
        .card { 
            background: white; 
            border-radius: 12px; 
            overflow: hidden; 
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); 
            transition: 0.3s; 
            border: 1px solid #f1f5f9; 
            text-align: center; /* Centrado para estilo moderno */
        }
        .card:hover { 
            transform: translateY(-5px); 
            box-shadow: 0 15px 20px -5px rgba(0, 0, 0, 0.1); 
            border-color: var(--secondary); 
        }
        .card-img { 
            width: 100%; 
            height: 200px; /* Altura ajustada para 4 columnas */
            object-fit: cover; 
        }
        .card-body { 
            padding: 30px 20px; 
        }
        .card-icon { 
            font-size: 1.8rem; /* Ícono más grande */
            color: var(--primary); 
            background: #e0f2fe; 
            width: 60px; 
            height: 60px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            border-radius: 50%; /* Redondo */
            margin: 0 auto 15px;
        }
        .card-title { color: var(--dark); font-size: 1.3rem; margin-bottom: 10px; font-weight: 700; }
        .card-text { color: #64748b; line-height: 1.6; font-size: 0.95rem; }


        /* --- NOSOTROS (CORPORATIVO) --- */
        .about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
        .about-text h3 { color: var(--dark); font-size: 2rem; margin-bottom: 20px; font-weight: 700; }
        .about-text p { line-height: 1.8; margin-bottom: 25px; color: #475569; font-size: 1.05rem; }
        .check-list li { margin-bottom: 15px; color: #334155; display: flex; align-items: flex-start; }
        .check-list i { color: var(--secondary); margin-right: 12px; margin-top: 5px; }
        .about-img { position: relative; }
        .about-img img { width: 100%; border-radius: 12px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); }
        .experience-badge { position: absolute; bottom: -20px; left: -20px; background: var(--primary); color: white; padding: 20px; border-radius: 12px; font-weight: 700; box-shadow: 0 10px 20px rgba(0,78,146,0.3); }

        /* --- VIDEO SECTION (NUEVO) --- */
        .video-section { background: #0f172a; color: white; text-align: center; }
        .video-container { max-width: 800px; margin: 40px auto 0; border-radius: 12px; overflow: hidden; box-shadow: 0 0 40px rgba(0, 200, 151, 0.2); border: 1px solid rgba(255,255,255,0.1); }

        /* --- PRICING (SAAS STYLE) --- */
        .pricing-card { background: white; padding: 50px 40px; border-radius: 16px; border: 1px solid #e2e8f0; text-align: center; flex: 1; min-width: 300px; transition: 0.3s; position: relative; }
        .pricing-card:hover { border-color: var(--primary); transform: scale(1.02); }
        .pricing-card.featured { border: 2px solid var(--primary); background: #fff; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1); z-index: 2; }
        .badge { position: absolute; top: 20px; right: 20px; background: #dbeafe; color: var(--primary); padding: 5px 12px; border-radius: 50px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; }
        .plan-name { color: #64748b; font-size: 0.9rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 15px; }
        .price { font-size: 3rem; font-weight: 800; color: var(--dark); margin-bottom: 10px; }
        .price span { font-size: 1rem; font-weight: 400; color: #94a3b8; }
        .features-list { margin: 35px 0; text-align: left; }
        .features-list li { margin-bottom: 15px; color: #475569; display: flex; align-items: center; font-size: 0.95rem; }
        .features-list i { color: var(--secondary); margin-right: 12px; }
        
        /* --- FORMULARIO (VISIBLE) --- */
        .form-container { background: white; padding: 60px; border-radius: 20px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1); max-width: 850px; margin: 0 auto; border-top: 6px solid var(--primary); }
        .form-group { margin-bottom: 25px; text-align: left; }
        .form-label { display: block; font-weight: 700; color: #1e293b; font-size: 0.9rem; margin-bottom: 10px; }
        .form-control { width: 100%; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 1rem; color: #334155; background: #f8fafc; transition: 0.3s; }
        .form-control:focus { border-color: var(--primary); outline: none; background: #fff; box-shadow: 0 0 0 3px rgba(0, 78, 146, 0.1); }

        /* Estilo para poner dos campos lado a lado en el formulario */
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        
        .radio-group { display: flex; gap: 20px; margin-top: 10px; background: #f1f5f9; padding: 15px; border-radius: 8px; }
        .radio-option { display: flex; align-items: center; gap: 10px; color: #334155; cursor: pointer; font-weight: 500; }
        
        .btn-submit { background: var(--dark); color: white; width: 100%; padding: 18px; font-size: 1.1rem; font-weight: 700; border-radius: 8px; border: none; cursor: pointer; transition: 0.3s; }
        .btn-submit:hover { background: var(--secondary); }

        /* --- FOOTER --- */
        .footer { background-color: #0f172a; color: white; padding: 80px 0 30px; margin-top: 0; }
        .footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 60px; margin-bottom: 60px; }
        .footer h3 { font-size: 1.8rem; margin-bottom: 20px; color: white; }
        .footer p, .footer a { color: #94a3b8; line-height: 1.6; font-size: 0.95rem; text-decoration: none; transition: 0.3s; }
        .footer a:hover { color: white; }
        .footer h4 { color: white; font-size: 1.1rem; margin-bottom: 25px; font-weight: 700; }
        .socials { display: flex; gap: 15px; margin-top: 20px; }
        .socials a { width: 40px; height: 40px; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; border-radius: 50%; color: white; }
        .socials a:hover { background: var(--secondary); }

        /* JS Requisito */
        .titulo-rojo { color: #ff4757 !important; transition: 0.5s; }
    </style>
</head>
<body>

    <nav class="nav">
        <div class="container-nav">
            <a href="#" class="nav__title">Klean<span>.</span></a>
            <div class="nav__menu">
                <a href="#servicios" class="nav__link">Soluciones</a>
                <a href="#nosotros" class="nav__link">Nosotros</a>
                <a href="#planes" class="nav__link">Planes</a>
                
                <div class="dropdown">
                    <button class="dropbtn">Equipo 3 <i class="fas fa-chevron-down"></i></button>
                    <div class="dropdown-content">
                        <a href="#">Calzontzi Hernández Yaretzi <small>(CEO)</small></a>
                        <a href="#">Jiménez Hernández Diana <small>(COO)</small></a>
                        <a href="#">Lee Obando Ileana Verónica <small>(CTO)</small></a>
                    </div>
                </div>

                <a href="reporte.php" class="nav__link btn-intranet"><i class="fas fa-user-shield"></i> Intranet</a>
            </div>
        </div>
    </nav>

    <header class="hero" id="inicio">
        <div class="container">
            <span class="hero-badge">
                <i class="fas fa-map-marker-alt" style="color: var(--secondary);"></i> 
                Disponible en México y Área Metropolitana
            </span>
            <h1 id="tituloPrincipal"> Llevamos la limpieza a un nuevo nivel </h1>
            <h2 class="frase-pequena">Ofreciéndote calidad, compromiso y resultados visibles desde el primer día</h2>
            <div>
                <a href="#contacto" class="btn btn-primary">Solicitar Auditoría</a>
                <a href="#video-demo" class="btn btn-outline"><i class="fas fa-play"></i> Ver Demo</a>
            </div>
        </div>
    </header>

    <section id="servicios" class="section-padding">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">Nuestras Divisiones</span>
                <h2>Soluciones Integrales de Limpieza Profesional</h2>
                <p>Servicios especializados que cubren todas las necesidades de limpieza, saneamiento y mantenimiento de su inmueble.</p>
            </div>

            <div class="grid-4">
                <article class="card">
                    <img src="./images/residential_pro.jpg" class="card-img" alt="Servicio Residencial" onerror="this.src='./images/residential_pro.jpg'">
                    <div class="card-body">
                        <div class="card-icon"><i class="fas fa-home"></i></div>
                        <h3 class="card-title">Klean Home™</h3>
                        <p class="card-text">Limpieza premium para <strong>hogares, apartamentos y AIRBNB</strong>. Incluye servicios especializados para <strong>mudanzas</strong> y deep cleaning.</p>
                    </div>
                </article>

                <article class="card">
                    <img src="./images/corporate_pro.jpg" class="card-img" alt="Servicio Corporativo" onerror="this.src='./images/corporate_pro.jpg'">
                    <div class="card-body">
                        <div class="card-icon"><i class="fas fa-building"></i></div>
                        <h3 class="card-title">Klean Facility™</h3>
                        <p class="card-text">Mantenimiento y gestión integral de <strong>oficinas, escuelas y condominios</strong>. Personal de planta y cumplimiento normativo (REPSE).</p>
                    </div>
                </article>

                <article class="card">
                    <img src="./images/cleaning.jpg" class="card-img" alt="Limpieza Post-Obra" onerror="this.src='./images/deep.jpg'">
                    <div class="card-body">
                        <div class="card-icon"><i class="fas fa-hammer"></i></div>
                        <h3 class="card-title">Klean Projects™</h3>
                        <p class="card-text">Servicios de única vez: <strong>Post-Obra, Limpieza Industrial, Pulido y Cristalización de Pisos</strong>, y Limpieza Profunda (Deep Cleaning).</p>
                    </div>
                </article>

                <article class="card">
                    <img src="./images/tech_clean.jpg" class="card-img" alt="Tecnología de Limpieza" onerror="this.src='./images/tech_clean.jpg'">
                    <div class="card-body">
                        <div class="card-icon"><i class="fas fa-robot"></i></div>
                        <h3 class="card-title">Smart Tech™</h3>
                        <p class="card-text">Saneamiento avanzado. Uso de <strong>vapor industrial</strong>, equipos de inyección/succión, y <strong>dashboard</strong> para monitoreo de productividad.</p>
                    </div>
                </article>
                
                <article class="card">
                    <img src="./images/eco_supplies.jpg" class="card-img" alt="Insumos ecológicos" onerror="this.src='./images/eco_supplies.jpg'">
                    <div class="card-body">
                        <div class="card-icon" style="background:#dcfce7; color: var(--secondary);"><i class="fas fa-leaf"></i></div>
                        <h3 class="card-title">Comercial y amigable</h3>
                        <p class="card-text"> Implementamos <strong>insumos ambientalmente responsables</strong>, validados para <strong>ambientes laborales y residenciales</strong>.</p>
                    </div>
                </article>

                <article class="card">
                    <img src="./images/security_team.jpg" class="card-img" alt="Seguridad y confianza" onerror="this.src='./images/security_team.jpg'">
                    <div class="card-body">
                        <div class="card-icon" style="background:#fee2e2; color:#ef4444;"><i class="fas fa-lock"></i></div>
                        <h3 class="card-title">Seguridad y Confianza</h3>
                        <p class="card-text"> Personal con filtros <strong>biométricos</strong>, pruebas de confianza y respaldo por póliza de responsabilidad civil.</p>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <section id="nosotros" class="section-padding bg-light">
        <div class="container">
            <div class="about-grid">
                <div class="about-text">
                    <span class="subtitle">Sobre Klean</span>
                    <h3>Excelencia Operativa y Confianza</h3>
                    <p>En Klean nos dedicamos a ofrecer una <strong>experiencia de limpieza profesional</strong>, cuidando cada detalle para que tus
                        espacios luzcan impecables y libres de contaminantes. Creemos en un servicio <strong>formal, responsable</strong> y pensado para tu bienestar.</p>
                    <p>Nuestro equipo está <strong>entrenado y equipado</strong> con <strong>productos biodegradables y seguros</strong>, ideales para hogares y oficinas.</p>
                    
                    <ul class="check-list">
                        <li><i class="fas fa-check-circle"></i> <strong>Gestión Total:</strong> Nosotros administramos, capacitamos y supervisamos al equipo operativo (REPSE).</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Atención Inmediata:</strong> Respuesta rápida ante requerimientos urgentes vía WhatsApp o App.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Seguridad:</strong> Póliza de responsabilidad civil incluida.</li>
                    </ul>
                </div>
                <div class="about-img">
                    <img src="./images/cleanoffice.jpg" alt="Equipo Klean" onerror="this.src='https://via.placeholder.com/500x400'">
                    <div class="experience-badge">
                        <span>+500</span> Clientes<br>Corporativos
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="video-demo" class="section-padding video-section">
        <div class="container">
            <div class="section-title">
                <span class="subtitle" style="color: var(--secondary);">Demostración de Funcionalidad</span>
                <h2 style="color: white;">Así Funciona Nuestro Servicio</h2>
                <p style="color: #cbd5e0;">Recorrido por el sistema, procesos y herramientas que utilizamos.</p>
            </div>
            
            <div class="video-container">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/ysz5S6P_bsU?controls=1&mute=0" title="Demo Plataforma" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section id="planes" class="section-padding">
    <div class="container">
        <div class="section-title">
            <span class="subtitle">Precios Transparentes</span>
            <h2>Planes Flexibles a tu Medida</h2>
            <p>Servicios diseñados para tu hogar grande, PyME o corporativo.</p>
        </div>
        
        <div style="display: flex; gap: 30px; justify-content: center; flex-wrap: wrap;">
            
            <div class="pricing-card">
                <div class="plan-name">Startup / Hogar</div>
                <div class="price">Básico</div>
                <p style="color:#64748b;">Ideal para espacios de hasta 150m².</p>
                <ul class="features-list">
                    <li><i class="fas fa-check"></i> Limpieza de Mantenimiento (4 hrs)</li>
                    <li><i class="fas fa-check"></i> <strong>Tratamiento de pisos rígidos</strong></li>
                    <li><i class="fas fa-check"></i> <strong>Saneamiento de zonas húmedas</strong></li>
                    <li><i class="fas fa-check"></i> Insumos incluidos </li>
                    <li><i class="fas fa-check"></i> Atención rápida vía WhatsApp</li>
                    <li><i class="fas fa-check"></i> Cambio de bolsas y manejo básico de residuos</li>
                    <li><i class="fas fa-check"></i> Checklist estándar de actividades para garantizar consistencia</li>
                </ul>
                <a href="#contacto" class="btn btn-outline" style="background:#f1f5f9; color:#333; width:100%; border:none;">Seleccionar</a>
            </div>

            <div class="pricing-card featured" style="border-color: var(--secondary);">
                <div class="badge" style="background: #ccfbf1; color: var(--secondary);">Hogar / PyME</div>
                <div class="plan-name" style="color:var(--secondary);">Intermedio</div>
                <div class="price" style="color:var(--secondary);">Estándar</div>
                <p style="color:#64748b;">Limpieza semanal para espacios de hasta 300m².</p>
                <ul class="features-list">
                    <li><i class="fas fa-check"></i> <strong>Protocolo de limpieza profunda (6 hrs) </strong></li>
                    <li><i class="fas fa-check"></i> Productos de alta eficiencia y bajo impacto ambiental</li>
                    <li><i class="fas fa-check"></i> Supervisión presencial programada</li>
                    <li><i class="fas fa-check"></i> Insumos higiénicos incluidos</li>
                    <li><i class="fas fa-check"></i> <strong>Saneamiento certificado de áreas críticas</strong></li>
                    <li><i class="fas fa-check"></i> Personal capacitado en hotelería</li>
                    <li><i class="fas fa-check"></i> Reporte digital de servicio (KPIs)</li>
                    <li style="color:#cbd5e0;"><i class="fas fa-times" style="color:#cbd5e0;"></i> Certificación REPSE</li>
                </ul>
                <a href="#contacto" class="btn btn-primary" style="width:100%; background: var(--secondary);">Seleccionar Estándar</a>
            </div>

            <div class="pricing-card">
                <div class="plan-name">Corporativo</div>
                <div class="price">Premium</div>
                <p style="color:#64748b;">Gestión integral para oficinas completas.</p>
                <ul class="features-list">
                    <li><i class="fas fa-check"></i> <strong>Personal de planta administrado (8 hrs) </strong></li>
                    <li><i class="fas fa-check"></i> Insumos higiénicos y de reposición incluidos</li>
                    <li><i class="fas fa-check"></i> Reabastecimiento automático de consumibles</li>
                    <li><i class="fas fa-check"></i> Desinfección de puntos de contacto </li>
                    <li><i class="fas fa-check"></i> Gestor de cuenta y seguimiento personalizado</li>
                    <li><i class="fas fa-check"></i> Plan de limpieza profunda trimestral incluido y Rotación de personal sin costo</li>
                    <li><i class="fas fa-check"></i> Póliza de responsabilidad civil</li>
                    <li><i class="fas fa-check"></i> Certificación de cumplimiento REPSE</li>
                </ul>
                <a href="#contacto" class="btn btn-outline" style="background:#f1f5f9; color:var(--primary); width:100%; border:1px solid var(--primary);">Cotizar Premium</a>
            </div>
        </div>
    </div>
</section>

    <section id="contacto" class="section-padding bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Inicia tu Transformación</h2>
                <p>Completa el formulario para recibir una propuesta formal en PDF en menos de 24 horas. Garantía de satisfacción.</p>
            </div>

            <div class="form-container">
    <div class="form-header">
        <h3 style="margin:0; color: var(--primary);">Solicitud de Propuesta</h3>
        <p style="font-size: 0.9rem; color: #64748b;">Déjanos tus datos y te contactaremos hoy mismo.</p>
    </div>

    <form action="guardar.php" method="POST">
        
        <div class="form-group">
            <label class="form-label">Nombre Completo o Razón Social</label>
            <input type="text" name="nombre_cliente" class="form-control" required placeholder="Ej. Corporativo Reforma S.A. de C.V.">
        </div>
        
        <div class="form-row">
            <div class="form-group">
                <label class="form-label">Correo Electrónico <span style="color:red">*</span></label>
                <input type="email" name="email" class="form-control" required placeholder="contacto@empresa.com">
            </div>
            <div class="form-group">
                <label class="form-label">Teléfono / WhatsApp</label>
                <input type="tel" name="telefono" class="form-control" required placeholder="55 1234 5678">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label class="form-label">Tipo de Inmueble</label>
                <select name="tipo_servicio" class="form-control">
                    <option value="Oficina">Oficinas Corporativas</option>
                    <option value="Industrial">Nave Industrial / Bodega</option>
                    <option value="Comercial">Local Comercial / Retail</option>
                    <option value="Casa">Residencial (Casa/Depa)</option>
                    <option value="Escuela">Escuela / Institución</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">Nivel de Servicio Requerido</label>
                <div class="radio-group">
                    <label class="radio-option">
                        <input type="radio" name="plan" value="Basico" checked> 
                        <span>Básico</span>
                    </label>
                    <label class="radio-option">
                        <input type="radio" name="plan" value="Estandar"> 
                        <span>Estándar</span>
                    </label>
                    <label class="radio-option">
                        <input type="radio" name="plan" value="Premium"> 
                        <span style="color: var(--primary); font-weight:700;">Premium (-20%)</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group" style="margin-top: 15px; margin-bottom: 25px;">
            <label class="radio-option" style="font-size: 0.85rem; color:#64748b; display: flex; align-items: center; gap: 10px;">
                <input type="checkbox" name="terminos" required style="width: auto; margin:0;">
                <span>He leído y acepto el Aviso de Privacidad y términos del servicio.</span>
            </label>
        </div>

        <button type="submit" class="btn-submit">
            Solicitar Propuesta Formal <i class="fas fa-paper-plane" style="margin-left:10px;"></i>
        </button>
    </form>
</div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h3 style="color:white; font-weight:800;">Klean<span style="color:var(--secondary)">.</span></h3>
                    <p>Empresa líder en Facility Management en México. Certificada en ISO 9001 y cumplimiento REPSE.</p>
                    <div class="socials">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4>Enlaces Rápidos</h4>
                    <ul>
                        <li><a href="#servicios">Soluciones</a></li>
                        <li><a href="#nosotros">Sobre Klean</a></li>
                        <li><a href="#planes">Cotizador</a></li>
                        <li><a href="reporte.php">Portal de Empleados</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4>Oficinas Centrales</h4>
                    <p><i class="fas fa-map-marker-alt" style="color:var(--secondary)"></i> Av. Reforma 222, CDMX</p>
                    <p><i class="fas fa-phone" style="color:var(--secondary)"></i> (55) 1234 5678</p>
                    <p><i class="fas fa-envelope" style="color:var(--secondary)"></i> contacto@klean.mx</p>
                </div>
            </div>
            
            <div style="text-align: center; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.1); color: #64748b; font-size: 0.85rem; display: flex; justify-content: space-between; align-items: center;">
                <span>&copy; 2025 Klean Facility Services. Todos los derechos reservados.</span>
                
                <button onclick="cambiarEstiloJS()" style="background: #1e293b; color: #94a3b8; border: 1px solid #334155; padding: 5px 12px; border-radius: 4px; cursor: pointer; font-size: 0.75rem;">
                    <i class="fas fa-code"></i> Test JS
                </button>
            </div>
        </div>
    </footer>

    <script>
    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Función Requisito PDF
    function cambiarEstiloJS() {
        var titulo = document.getElementById('tituloPrincipal');
        titulo.scrollIntoView({behavior: "smooth"});

        if (titulo.innerText.includes("Gestión Inteligente")) {
            titulo.innerHTML = "¡SOLICITUD DE LIMPIEZA EMERGENCIA ACTIVADA!";
            titulo.classList.add('titulo-rojo');
            setTimeout(function() { 
                alert("Prueba JS Exitosa: Estilo del título modificado dinámicamente."); 
            }, 800);
        } else {
            titulo.innerHTML = "Gestión Inteligente de<br>Espacios Corporativos y Residenciales.";
            titulo.classList.remove('titulo-rojo');
        }
    }
    </script>
</body>
</html>