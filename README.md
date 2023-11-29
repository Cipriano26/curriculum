# CV Builder con PHP, CodeIgniter y Migraciones MySQL

Este proyecto es una aplicación de Curriculum Vitae (CV) programada en PHP utilizando el framework CodeIgniter y migraciones de base de datos MySQL. Proporciona una plataforma para crear, gestionar y visualizar currículos de manera eficiente y estructurada.

## Características principales

- **Gestión de Curriculum:** Crea y administra diferentes secciones de tu CV, incluyendo experiencia laboral, habilidades, educación, proyectos, etc.
- **Migraciones MySQL:** Utiliza migraciones de base de datos para mantener una estructura fácilmente gestionable y escalable en la base de datos MySQL.
- **Interfaz Intuitiva:** Una interfaz sencilla y fácil de usar que permite a los usuarios agregar, editar y eliminar secciones del currículum con facilidad.
- **Personalización:** Ofrece la posibilidad de personalizar la apariencia y el contenido del CV para adaptarse a diferentes necesidades y estilos.

## Tecnologías utilizadas

- **CodeIgniter:** Un framework PHP que proporciona un conjunto de herramientas potentes para el desarrollo web rápido y eficiente.
- **MySQL:** Base de datos relacional utilizada para almacenar la información del CV.
- **HTML, CSS, JavaScript:** Frontend desarrollado con las tecnologías estándar para una experiencia de usuario atractiva y receptiva.

## Uso

1. Clona o descarga este repositorio.
2. Configura tu entorno y la base de datos MySQL en `app/Config/Database.php`.
3. Ejecuta las migraciones para crear la estructura de la base de datos y poblar algunos datos de ejemplo.
4. Accede a la aplicación y comienza a construir tu CV.

Este proyecto se ha desarrollado con la intención de proporcionar una solución flexible y fácil de usar para la creación y gestión de currículos en línea, manteniendo la estructura de la base de datos organizada mediante el uso de migraciones.

¡Contribuciones, sugerencias y mejoras son bienvenidas!

# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> **Warning**
> The end of life date for PHP 7.4 was November 28, 2022. If you are
> still using PHP 7.4, you should upgrade immediately. The end of life date
> for PHP 8.0 will be November 26, 2023.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
