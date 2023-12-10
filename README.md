# Notas para desarrollo

## Archivo .env
No se sube, por seguridad. Cuando se descargue, hay que clonar .env.example y renombrarlo como .env y ahí poner los datos del proyecto: 

APP_NAME="anacos"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL="anacos.test"

Tras clonar el .env, dará error de que falta la app key, debe generarse con el comando:
`php artisan key:generate`

## Instalación de paquetes con composer e instalación de paquetes con node
Dentro de la carpeta del proyecto de la máquina virtual:
`composer install`
`npm install`

## Compilación de CSS y JS
En este proyecto usamos Laravel Mix.
- desarrollo:
    `npm run watch` (queda en ejecución y al guardar un js o css recompila)
    `npm run dev` (solo compila una vez)
- producción: `npm run production`

## BD
- nombre: anacosbd  
- usuario: root
- contraseña: (vacia)

# Recursos utilizados
- Laravel 10 (https://laravel.com/docs/10.x)
- TailwindCSS 3 (https://tailwindcss.com/)
- AlpineJS 3 (https://alpinejs.dev/)

## TailwindCSS
- Nesting (https://tailwindcss.com/docs/using-with-preprocessors#nesting)