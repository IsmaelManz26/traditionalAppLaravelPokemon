# traditionalLaravelApp

Aplicación Tradicional de Laravel

## Descripción

Esta es una aplicación web desarrollada con el framework Laravel. La aplicación permite a los usuarios gestionar una lista de Pokémon, incluyendo funcionalidades de autenticación de usuarios, creación, edición y eliminación de Pokémon.

## Requisitos

- PHP ^8.2
- Composer
- Node.js y npm

## Instalación

1. Clona el repositorio:
    ```sh
    git clone <URL_DEL_REPOSITORIO>
    cd traditionalLaravelApp
    ```

2. Instala las dependencias de PHP:
    ```sh
    composer install
    ```

3. Instala las dependencias de Node.js:
    ```sh
    npm install
    ```

4. Copia el archivo de entorno y genera la clave de la aplicación:
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

5. Configura tu base de datos en el archivo `.env`.

6. Ejecuta las migraciones de la base de datos:
    ```sh
    php artisan migrate
    ```

## Uso

1. Inicia el servidor de desarrollo:
    ```sh
    php artisan serve
    ```

2. Compila los assets:
    ```sh
    npm run dev
    ```

3. Accede a la aplicación en tu navegador en `http://localhost:8000`.

## Estructura del Proyecto

- `app/Http/Controllers`: Contiene los controladores de la aplicación.
- `resources/views`: Contiene las vistas Blade de la aplicación.
- `database/migrations`: Contiene las migraciones de la base de datos.
- `public/assets`: Contiene los archivos estáticos como JavaScript y CSS.

## Funcionalidades

- Autenticación de usuarios (login y logout).
- Gestión de Pokémon (crear, editar, eliminar, ver).
- Mensajes flash para notificaciones de éxito y error.

## Contribuir

1. Haz un fork del proyecto.
2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`).
3. Realiza tus cambios y haz commit (`git commit -am 'Añadir nueva funcionalidad'`).
4. Sube tus cambios (`git push origin feature/nueva-funcionalidad`).
5. Abre un Pull Request.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más detalles.
