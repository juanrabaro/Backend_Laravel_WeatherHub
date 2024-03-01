# Backend con Laravel y MySQL para WeatherHub

> [!TIP]
> Hay un directorio llamado **entregas** en el cual se encuentran el archivo con los test de postman, el diagrama E/R y el modelo de datos

> [!IMPORTANT]
> Este método solo sirve para **linux**, si usas windows debes usar **wsl** y tener el **docker desktop** configurado para ello

Tras clonar el repositorio seguir los siguientes pasos para ejecutar en local el proyecto:

**1. Copiar el archivo .env.example en .env**

```cp .env.example .env```

**2. Ejecutar esto**

```bash
docker run --rm \
-u "$(id -u):$(id -g)" \
-v "$(pwd):/var/www/html" \
-w /var/www/html \
laravelsail/php83-composer:latest \
composer install --ignore-platform-reqs
```

**3. Ejecutamos el proyecto**

```./vendor/bin/sail up```

Entramos al contenedor **backend_laravel_weatherhub-laravel.test-1** y ahí ejecutamos los siguientes comandos

**1. Generamos la key**

```php artisan key:generate```

**2. Hacemos las migraciones**

```php artisan migrate:fresh --seed```

Si todo ha funcionado correctamente tienes que tener ejecutandose **phpMyAdmin** en el puerto **8001** y la **aplicación de laravel** en el puerto **80**.

Haz la prueba mirando en ```http://localhost:80/api/ciudades```
