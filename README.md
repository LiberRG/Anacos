# Notas para desarrollo

## Archivo .env
No lo subo. Cuando esto se descargue de Bitbucket, hay que clonar .env.example y renombrarlo como .env y ahí ponerle la URL base del proyecto en local (dependiendo de qué entorno de desarrollo local tengamos, lo típico será http://gedet365.test o localhost:8000).

Tras clonar el .env, dará error de que falta la app key, se puede generar con el comando (preceder de «valet» si correspondiera):
`php artisan key:generate`

## Instalación de paquetes con composer
En caso de Valet:
`valet composer install`

En caso de Homestead, desde dentro de la carpeta del proyecto de la máquina virtual:
`composer install`

## Instalación de paquetes con node
`npm install`

## Compilación de CSS y JS
En este proyecto usamos Laravel Mix, no Vite.
- desarrollo:
    `npm run watch` (queda en ejecución y al guardar un js o css recompila)
    `npm run dev` (solo compila una vez)
- producción: `npm run production`

## BD
La base de datos ya existe y el cliente ya la tiene en uso para otros proyectos. Además, no nos conectaremos a ella directamente sino a través de una API que desarrollaremos en paralelo con este proyecto y que se reutilizará para otros 365 que se vendan a otras asociaciones (SEC, AEDV…)

## Código
Seguir esta notación: https://github.com/alexeymezenin/laravel-best-practices
Busca «Libertad» en los archivos del código, te he dejado algunas notas


# Actualización de código no servidor de producción

## TODO: Actualizar código
FALTA

Contraseña:
FALTA

# Recursos utilizados
- Laravel 10 (https://laravel.com/docs/10.x)
- TailwindCSS 3 (https://tailwindcss.com/)
- AlpineJS 3 (https://alpinejs.dev/)
- TODO: ir añadiendo aquí las herramientas usadas.

## TailwindCSS
- Nesting (https://tailwindcss.com/docs/using-with-preprocessors#nesting)

# Post proyecto

TODO:

FTP
- URL: 
- usuario: 
- contraseña: 

BD
- nombre: 
- usuario: 
- contraseña: 
- servidor: 