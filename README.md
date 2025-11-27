# 🧼 Klean | Soluciones Urbanas de Limpieza (Facility Services)

![UNAM](https://img.shields.io/badge/UNAM-Facultad_de_Ingeniería-gold)
![Carrera](https://img.shields.io/badge/Ingeniería-Computación-blue)
![Semestre](https://img.shields.io/badge/Semestre-2026--1-red)

> **Universidad Nacional Autónoma de México** > **Facultad de Ingeniería**

---

## 🎓 Datos Académicos

| Campo | Detalle |
| :--- | :--- |
| **Institución** | UNAM - Facultad de Ingeniería |
| **Carrera** | Ingeniería en Computación |
| **Asignatura** | Negocios Electrónicos y Desarrollo Web |
| **Grupo** | 02 |
| **Profesor** | M.I. Salvador Perez Viramontes |
| **Fecha de Entrega** | Noviembre 2025 |
| **Ciclo Escolar** | 2026-1 |

### 👥 Integrantes del Equipo (Eq3)
* **Calzontzi Hernández Yaretzi**
* **Jiménez Hernández Diana**
* **Lee Obando Ileana Veronica**

---

## 💡 Concepto del Negocio: ¿Qué es Klean?

En el contexto de la ingeniería de servicios, **Klean** es una Startup de **Facility Services**. Nos dedicamos a la optimización de mantenimiento de espacios para que nuestros clientes recuperen su activo más valioso: su tiempo.

### Nuestro Modelo de Negocio
La plataforma web integra soluciones para dos segmentos de mercado:

1.  **Residencial (B2C):** *Confianza y Tiempo.*
    * Servicios para casas y departamentos (Limpieza profunda, recurrente).
    * Objetivo: Eliminar la carga operativa del usuario final.
2.  **Corporativo (B2B):** *Imagen y Productividad.*
    * Servicios para oficinas y edificios (Vidrios de altura, sanitización, insumos).
    * Objetivo: Garantizar la continuidad operativa de las empresas mediante espacios funcionales.

### 🚀 Innovación y Tecnología
Klean opera bajo un modelo **On-Demand** que moderniza el sector tradicional:
* **Gestión Digital:** Solicitud y cotización de servicios en tiempo real vía Web.
* **Seguridad:** Personal verificado (Background checks) y capacitado.
* **Sostenibilidad:** Uso de productos biodegradables y maquinaria industrial de alta eficiencia.

---

## 🛠️ Stack de Desarrollo y Herramientas

El proyecto fue implementado utilizando las siguientes tecnologías y herramientas de entorno:

### Entorno de Desarrollo
* **[XAMPP](https://www.apachefriends.org/):** Pila de servicios (Apache + MariaDB/MySQL + PHP).
* **[Visual Studio Code](https://code.visualstudio.com/):** IDE principal.

### Extensiones de VS Code (Calidad de Código)
Para mantener estándares de ingeniería de software se utilizaron:
1.  **Prettier - Code formatter:** Formateo automático para consistencia de estilo.
2.  **Live Server:** Despliegue local en tiempo real para Frontend.
3.  **vscode-icons:** Organización visual de la estructura de archivos.

---

## ⚙️ Despliegue e Instalación

Sigue estos pasos para levantar la instancia local del proyecto.

### 1. Configuración del Servidor
Asegúrate de tener el servicio **Apache** y **MySQL** activos en el panel de control de XAMPP.

### 2. Base de Datos (MySQL)
* Accede a `http://localhost/phpmyadmin`
* Crea la base de datos: `Eq3Klean`
* Importa el script SQL (`Eq3Klean.sql`) ubicado en la raíz del repositorio.

> **Comando de Respaldo (Referencia):**
> El esquema fue generado mediante CLI para garantizar integridad:
> ```bash
> C:\xampp\mysql\bin\mysqldump -u root -p Eq3Klean > Eq3Klean.sql
> ```

### 3. Ejecución
Clona el repositorio en tu carpeta `htdocs` y accede a:

👉 **[http://localhost/Eq3Klean/index.php](http://localhost/Eq3Klean/index.php)**

---

## 📂 Arquitectura del Sitio

El sistema cumple con los requerimientos de evaluación funcional y técnica:

* **Frontend:** HTML5 Semántico, CSS3 (Diseño Responsivo/Corporativo), JavaScript (DOM Manipulation).
* **Backend:** PHP estructurado para manejo de lógica de negocio.
* **Persistencia:** Base de Datos Relacional MySQL.
* **Módulos:**
    * **Inicio:** Propuesta de valor y CTA (Call to Action).
    * **Servicios:** Tablas comparativas de planes (Básico/Estándar/Premium).
    * **Cotización:** Formulario con captura de variables de negocio (tipo de inmueble).

---
© 2025 Klean Solutions. Facultad de Ingeniería, UNAM.
