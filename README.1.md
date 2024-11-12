
# traditionalAppLaravelPokemon

## Requisitos previos

- **PHP**: Versión 8.0 o superior
- **Composer**: Para gestionar dependencias de PHP
- **Node.js y npm**: Para gestionar las dependencias front-end y compilar los assets
- **Servidor de base de datos**: MySQL

## Instrucciones de instalación

1. **Clonar el repositorio**

   ```bash
   git clone https://github.com/IsmaelManz26/traditionalAppLaravelPokemon.git
   cd traditionalAppLaravelPokemon
   ```

2. **Instalar dependencias de PHP con Composer**

   Ejecuta el siguiente comando en la raíz del proyecto para instalar todas las dependencias de PHP:

   ```bash
   composer install
   ```

3. **Configurar el archivo `.env`**

   - Duplica el archivo `.env.example` como `.env` y actualiza las variables necesarias:

     ```bash
     cp .env.example .env
     ```

   - Configura las siguientes variables en el archivo `.env`:

     ```env
     APP_NAME="traditionalAppLaravelPokemon"
     APP_ENV=local
     APP_KEY=
     APP_DEBUG=true
     APP_URL=http://localhost

     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=nombre_de_tu_base_de_datos
     DB_USERNAME=usuario
     DB_PASSWORD=contraseña
     ```

4. **Generar la clave de la aplicación**

   Ejecuta el siguiente comando para generar una clave única y añadirla automáticamente al archivo `.env`:

   ```bash
   php artisan key:generate
   ```

5. **Configurar la base de datos**

   - Crea una base de datos con el nombre especificado en el archivo `.env`.
   - Luego, ejecuta las migraciones y semillas (si tienes seeds) para configurar la base de datos:

     ```bash
     php artisan migrate --seed
     ```

6. **Instalar las dependencias de Node.js y compilar los assets**

   ```bash
   npm install
   npm run build
   ```

7. **Iniciar el servidor de desarrollo**

   Ejecuta el siguiente comando para iniciar el servidor local de Laravel:

   ```bash
   php artisan serve
   ```

8. **Acceder a la aplicación**

   Abre tu navegador y ve a [http://localhost:8000](http://localhost:8000) para acceder a la aplicación.

## Información adicional

- **Cache de configuración**: En producción, ejecuta estos comandos para optimizar el rendimiento:

  ```bash
  php artisan config:cache
  php artisan route:cache
  php artisan view:cache
  ```

- **Depuración**: Asegúrate de desactivar `APP_DEBUG` en producción para evitar la exposición de información sensible.

## Contacto

Si tienes alguna pregunta o problema, no dudes en contactarme.
