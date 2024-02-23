# Utilizar la imagen base de Laravel Sail para PHP 8.3
FROM sail-8.3/app

# Configurar el directorio de trabajo
WORKDIR /var/www/html

# Copiar el contenido del directorio actual al contenedor
COPY . .

# Cambiar los permisos de los archivos y directorios copiados
RUN chown -R www-data:www-data /var/www/html

# Definir la variable de entorno del grupo de usuarios de WWW
ARG WWWGROUP
ENV WWWGROUP ${WWWGROUP}

# Exponer el puerto de la aplicación y el puerto de Vite si está configurado
EXPOSE 80
EXPOSE 5173

# Definir las variables de entorno para el usuario de WWW, Laravel Sail y Xdebug
ENV WWWUSER ${WWWUSER}
ENV LARAVEL_SAIL 1
ENV XDEBUG_MODE ${SAIL_XDEBUG_MODE:-off}
ENV XDEBUG_CONFIG ${SAIL_XDEBUG_CONFIG:-client_host=host.docker.internal}
ENV IGNITION_LOCAL_SITES_PATH ${PWD}

# Volver a definir la variable de entorno para el puerto de la aplicación y el puerto de Vite
ENV APP_PORT ${APP_PORT:-80}
ENV VITE_PORT ${VITE_PORT:-5173}

# Definir las dependencias del contenedor
RUN apk add --update --no-cache \
    mysql-client \
    postgresql-client \
    sqlite \
    nodejs \
    npm \
    yarn \
    openssh-client \
    git \
    curl \
    vim \
    zip \
    unzip \
    php8-bcmath \
    php8-ctype \
    php8-fileinfo \
    php8-json \
    php8-mbstring \
    php8-tokenizer \
    php8-xml \
    php8-zip \
    php8-pdo \
    php8-dom \
    php8-simplexml \
    php8-xmlwriter \
    php8-xmlreader \
    php8-phar \
    php8-session \
    php8-iconv \
    php8-openssl \
    php8-pdo_mysql \
    php8-pdo_pgsql \
    php8-pdo_sqlite \
    php8-pcntl \
    php8-posix \
    php8-gd \
    php8-imagick \
    php8-ldap \
    php8-curl \
    php8-exif \
    php8-intl \
    php8-ftp \
    php8-sockets \
    php8-xmlrpc \
    php8-zlib \
    php8-sodium \
    php8-pdo_sqlite \
    php8-tokenizer \
    php8-opcache \
    php8-redis \
    php8-zmq \
    php8-mysqli \
    php8-pdo_odbc \
    php8-pdo_pgsql \
    php8-pdo_sqlite \
    php8-gettext \
    php8-mongodb \
    php8-soap \
    php8-ctype \
    php8-calendar \
    php8-sysvmsg \
    php8-sysvsem \
    php8-sysvshm \
    php8-shmop \
    php8-pdo_firebird \
    php8-pdo_dblib \
    php8-session \
    php8-exif \
    php8-apcu \
    php8-sockets \
    php8-gmp \
    php8-sysvshm \
    php8-sysvsem \
    php8-calendar \
    php8-soap \
    php8-bz2 \
    php8-zip \
    php8-zlib \
    php8-xml \
    php8-phar \
    php8-tokenizer \
    php8-simplexml \
    php8-dom \
    php8-xmlwriter \
    php8-xmlreader \
    php8-iconv \
    php8-ftp \
    php8-posix \
    php8-pcntl \
    php8-gettext \
    php8-ldap \
    php8-curl \
    php8 \
    && rm -rf /var/cache/apk/*

# Comando por defecto para ejecutar la aplicación
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
