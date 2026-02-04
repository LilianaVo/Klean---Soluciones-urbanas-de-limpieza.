<div align="center">

# Klean: Urban Cleaning Solutions

### A Facility Services Startup platform for B2B and B2C market segments.

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Apache](https://img.shields.io/badge/Apache-D22128?style=for-the-badge&logo=apache&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)

[View Demo] • [Report Bug] • [Request Feature]

</div>

---

## Business Concept

**Klean** is a **Facility Services Startup** modeled within the context of Service Engineering. We focus on optimizing space maintenance, allowing our clients to reclaim their most valuable asset: time.

### Business Model
The web platform integrates solutions for two key market segments:

1.  **Residential (B2C):** *Trust & Time.*
    * Services for houses and apartments (Deep cleaning, recurring maintenance).
    * **Goal:** Eliminate the operational burden for the end user.
2.  **Corporate (B2B):** *Image & Productivity.*
    * Services for offices and buildings (High-rise glass cleaning, sanitization, supplies).
    * **Goal:** Ensure business continuity through functional workspaces.

### Innovation & Technology
Klean operates on an **On-Demand** model that modernizes the traditional sector:
* **Digital Management:** Real-time service requests and quoting via Web.
* **Security:** Verified staff (Background checks) and professional training.
* **Sustainability:** Use of biodegradable products and high-efficiency industrial machinery.

---

## Academic Context

This project was developed for the **Electronic Business & Web Development** course at the **National Autonomous University of Mexico (UNAM)**.

| **Course Information** | **Details** |
| :--- | :--- |
| **University** | Universidad Nacional Autónoma de México (UNAM) |
| **Faculty** | **Faculty of Engineering** |
| **Course** | E-business and Web Development |
| **Professor** | M.I. Salvador Perez Viramontes |
| **Semester** | 2026-1 |
| **Group** | 02 |

---

## Tech Stack & Tools

The project was implemented using the following technologies and environment tools:

### Development Environment
* **[XAMPP](https://www.apachefriends.org/):** Service stack (Apache + MariaDB/MySQL + PHP).
* **[Visual Studio Code](https://code.visualstudio.com/):** Main IDE.

### Quality Assurance Tools
To maintain software engineering standards, the following VS Code extensions were used:
1.  **Prettier:** Automatic code formatting for style consistency.
2.  **Live Server:** Real-time local deployment for Frontend.
3.  **vscode-icons:** Visual file structure organization.

---

## Deployment & Installation

Follow these steps to deploy the local instance of the project.

### 1. Server Configuration
Ensure that **Apache** and **MySQL** services are active in your XAMPP control panel.

### 2. Database Setup (MySQL)
* Access `http://localhost/phpmyadmin`
* Create a database named: `Eq3ServiciosLimpieza`
* Import the SQL script (`bd_klean.sql` located in the root directory).

> **Backup Command (Reference):**
> The schema was generated via CLI to ensure integrity:
> ```bash
> C:\xampp\mysql\bin\mysqldump -u root -p Eq3ServiciosLimpieza > bd_klean.sql
> ```

### 3. Execution
Clone the repository into your `htdocs` folder and navigate to:

👉 **`http://localhost/Eq3Klean/index.php`**

---

## Site Architecture

The system meets functional and technical evaluation requirements:

* **Frontend:** Semantic HTML5, CSS3 (Responsive/Corporate Design), JavaScript (DOM Manipulation).
* **Backend:** Structured PHP for business logic handling.
* **Persistence:** MySQL Relational Database.
* **Modules:**
    * **Home:** Value proposition and CTA (Call to Action).
    * **Services:** Comparative tables for plans (Basic/Standard/Premium).
    * **Quoting:** Dynamic form capturing business variables (property type).

---

## Contributors (Team Eq3)

* **Calzontzi Hernández Yaretzi**
* **Jiménez Hernández Diana**
* **Lee Obando Ileana Verónica**

---

## 📄 License

© 2025 Klean Solutions. Distributed under the MIT License.
