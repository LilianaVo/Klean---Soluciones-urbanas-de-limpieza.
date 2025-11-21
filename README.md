# 🌀 Klean | Soluciones Urbanas de Limpieza (Facility Services)

![Estado](https://img.shields.io/badge/Estado-Finalizado-success)
![Semestre](https://img.shields.io/badge/Semestre-2026--1-blue)
![Curso](https://img.shields.io/badge/Materia-Negocios_Electrónicos-orange)

> **Proyecto Final de Desarrollo Web**

---

## 🎓 Datos Académicos

| Campo | Detalle |
| :--- | :--- |
| **Materia** | NEGOCIOS ELECTRÓNICOS Y DESARROLLO WEB |
| **Grupo** | 02 |
| **Profesor** | Salvador Perez Viramontes |
| **Fecha** | Noviembre 2025 |
| **Semestre** | 2026-1 |

### 👥 Integrantes del Equipo (Eq3)
* **Calzontzi Hernández Yaretzi**
* **Jiménez Hernández Diana**
* **Lee Obando Ileana Veronica**

---

## 💡 Concepto del Negocio: ¿Qué es Klean?

En el mundo real, **Klean** no es solo un servicio de limpieza, es una Startup de **Facility Services**. Nos dedicamos a mantener espacios higiénicos, seguros y funcionales para que nuestros clientes recuperen su activo más valioso: su tiempo.

### Nuestro Modelo de Negocio
Nuestra plataforma web ataca dos mercados estratégicos:

1.  **Residencial (B2C):** *Confianza y Tiempo.*
    * Servicios para casas y departamentos (Limpieza profunda, recurrente, lavado de salas).
    * Objetivo: Que el cliente no pierda su fin de semana limpiando.
2.  **Corporativo (B2B):** *Imagen y Productividad.*
    * Servicios para oficinas y locales (Vidrios de altura, pulido de pisos, insumos higiénicos).
    * Objetivo: Una oficina impecable proyecta profesionalismo.

### 🚀 Enfoque "Startup" (Innovación)
A diferencia de las empresas tradicionales, Klean opera bajo un modelo **On-Demand** (tipo Uber):
* **Tecnología:** Gestión de citas en tiempo real desde la Web.
* **Seguridad:** Personal de confianza con verificación de antecedentes (Safety First).
* **Eco-Friendly:** Uso de productos biodegradables y maquinaria moderna (vapor/industrial).

---

## 🛠️ Herramientas de Desarrollo Requeridas

Para replicar el entorno de desarrollo de este proyecto, se requieren las siguientes herramientas:

### Software Base
* **[XAMPP](https://www.apachefriends.org/):** Servidor local (Apache + MySQL).
* **[Visual Studio Code](https://code.visualstudio.com/):** Editor de código fuente.

### Extensiones de VS Code Recomendadas
Para mantener el estándar de código y visualización:
1.  **Prettier - Code formatter:** Para mantener el estilo consistente.
2.  **Live Server:** Para visualización en tiempo real (Frontend).
3.  **vscode-icons:** Para mejor organización visual de archivos.

---

## ⚙️ Guía Técnica y Despliegue

Sigue estos pasos para instalar y ejecutar el proyecto en tu máquina local.

### 1. Configuración del Entorno
Asegúrate de que XAMPP esté corriendo (servicios Apache y MySQL activos).

### 2. Base de Datos
* Accede al administrador de PHP: `http://localhost/phpmyadmin`
* Crea una base de datos llamada: `Eq3Klean`
* Importa el archivo `.sql` incluido en la carpeta raíz.

> **Nota de Respaldo:** El archivo SQL fue generado mediante la siguiente instrucción en consola (CMD como administrador):
> ```bash
> C:\xampp\mysql\bin\mysqldump -u root -p Eq3Klean > Eq3Klean.sql
> ```

### 3. Ejecución del Sitio
Una vez configurado XAMPP y clonado el repositorio en la carpeta `htdocs`, accede a la siguiente URL:

👉 **[http://localhost/Eq3Klean/index.php](http://localhost/Eq3Klean/index.php)**

---

## 📂 Estructura del Sitio Web

El sitio cumple con los requisitos de evaluación mediante las siguientes secciones:

* **Inicio (index.php):** "Tu oficina impecable, sin que muevas un dedo". Presentación de la propuesta de valor.
* **Servicios:** Tablas comparativas (Plan Básico vs. Premium) y listas detalladas de servicios B2B/B2C.
* **Cotización (Formulario):** Captura de datos reales para el negocio (Tipo de inmueble, m², frecuencia).
* **Backend:** Procesamiento de datos en PHP y conexión persistente a MySQL.

---
© 2025 Klean Solutions. Proyecto Académico FES Aragón.
