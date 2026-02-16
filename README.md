# **🌌 CosmosWEB \- Explorador del Sistema Solar**

**CosmosWEB** es una plataforma educativa interactiva desarrollada para el proyecto final de la 10ª Quincena (Q10). La aplicación combina una experiencia visual inmersiva mediante el uso de **Bootstrap 5** y **JavaScript**, con una gestión robusta de datos en el servidor mediante **PHP** y **MySQL/MariaDB**.

## **🚀 Características Principales**

* **Exploración Visual:** Carrusel dinámico con efectos de *fade out/in* y modales de alta resolución.  
* **Vistas Duales:** Cada planeta cuenta con una "Vista Estética" (imagen ampliada \+ GIF de rotación axial) y una "Vista Técnica" con fichas descriptivas.  
* **Sistema de Usuarios:** Registro e inicio de sesión seguro con encriptación de contraseñas (`password_hash`).  
* **Interfaz Adaptativa:** Diseño *Mobile-First* que utiliza el sistema de rejilla de 12 columnas de Bootstrap.  
* **Estética Espacial:** Modo oscuro (Dark Mode) con efectos de iluminación `drop-shadow` para eliminar bordes en imágenes transparentes.

## **🛠️ Tecnologías Utilizadas**

* **Frontend:** HTML5, CSS3, JavaScript (ES6), Bootstrap 5\.  
* **Backend:** PHP 8.2.  
* **Base de Datos:** MariaDB / MySQL.  
* **Entorno:** Compatible con XAMPP (Linux/Windows) y Docker.

## **📋 Requisitos Previos**

* Servidor local (XAMPP, WAMP o LAMP).  
* PHP 8.0 o superior.  
* Extensión `mysqli` habilitada.

## **🔧 Instalación y Configuración**

### **1\. Clonar o descargar el proyecto**

Descarga el repositorio y colócalo en la carpeta raíz de tu servidor:

* **Linux (XAMPP):** `/opt/lampp/htdocs/CosmosWEB-SASDIW`  
* **Windows (XAMPP):** `C:\xampp\htdocs\CosmosWEB-SASDIW`

### **2\. Configurar la Base de Datos**

1. Accede a **phpMyAdmin** (`http://localhost/phpmyadmin`).  
2. Crea una nueva base de datos llamada `cosmosweb`.  
3. Importa el archivo situado en la raíz del proyecto: `database.sql`.

### **3\. Ajustar la Conexión (`includes/db.php`)**

Asegúrate de que los parámetros de conexión coincidan con tu entorno local:

```PHP

$host = 'localhost';

$user = 'root';

$pass = ''; // O tu contraseña de MySQL

$db   = 'cosmosweb';

$port = '3306'; // Cambiar a 3307 si usas el puerto de MariaDB en Windows
```

### **4\. Permisos en Linux (Ubuntu)**

Si experimentas un **Error 500**, asegúrate de otorgar permisos de lectura a la carpeta del proyecto:

```Bash

sudo chmod \-R 755 /opt/lampp/htdocs/CosmosWEB-SASDIW
```

## **📁 Estructura del Proyecto**

* `/api`: Manejadores de lógica de servidor (login, registro, logout).  
* `/assets`: Recursos estáticos (CSS, JS, imágenes de planetas y GIFs).  
* `/includes`: Archivos de configuración de DB y datos dinámicos.  
* `index.php`: Página principal y explorador de planetas.  
* `sql/sistema-solar.sql`: Base de datos de la aplicación.  
* `login.php / registro.php`: Interfaz de gestión de usuarios.

---

**Desarrollado por:** Samuel Aded Santafé

**Fecha:** 16 de febrero de 2026

**Módulo:** Diseño de interfaces Web (DIW)
