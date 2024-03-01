# Backend con Laravel y MySQL para WeatherHub

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

**4. Generamos la key**

```php artisan key:generate```

**5. Hacemos las migraciones**

```sail artisan migrate:fresh --seed```
