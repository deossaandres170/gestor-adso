# Gestor ADSO

Sistema web para la gestión de proyectos académicos y modelos desarrollado en el marco de la formación ADSO (Análisis y Desarrollo de Software) del SENA.

---

## Herramientas y Versiones Reales del Entorno

Las siguientes son las versiones exactas instaladas y verificadas en el equipo de desarrollo:

* **PHP:** 8.2 (Entorno XAMPP en Linux Mint / Pop!_OS)
* **Composer:** 2.x
* **Laravel Framework:** 11.x
* **Git:** 2.x
* **Base de Datos:** MariaDB / MySQL (XAMPP)

---

## Comandos de Verificación del Entorno

Para verificar las versiones instaladas en el sistema, ejecutar en terminal:

```bash
php -v
composer -V
php artisan --version
git --version

# Gestor ADSO - Sistema de Gestión de Proyectos

Proyecto desarrollado en el marco de la formación ADSO (Análisis y Desarrollo de Software - SENA).

## Requisitos del Sistema
- PHP 8.2+
- Composer 2.x
- MariaDB / MySQL (XAMPP)
- Laravel 12

## Instalación y Configuración Local
1. Clonar el repositorio:

bash
git clone https://github.com/deossaandres170/gestor-adso.git

2. Instalar dependencias:

bash
composer install

3. Configurar el archivo `.env`:

bash
cp .env.example .env
php artisan key:generate

4. Ejecutar migraciones:

bash
php artisan migrate

5. Iniciar el servidor local:

bash
php artisan serve

## Repositorio Oficial
- GitHub: https://github.com/deossaandres170/gestor-adso