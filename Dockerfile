# Use the official PHP 8.3 image from Docker Hub
FROM php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy existing application directory contents
COPY . /var/www

# Install dependencies
RUN composer install

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]

# # Use the official PHP image from the dockerhub
# FROM php:8.3-fpm

# # Install system dependencies
# RUN apt-get update && apt-get install -y \
#     git \
#     curl \
#     libpng-dev \
#     libonig-dev \
#     libxml2-dev \
#     zip \
#     unzip \
#     wget

# # Clear cache
# RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# # Install PHP extensions
# RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# # Get latest Composer
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# # Get dockerize
# RUN wget https://github.com/jwilder/dockerize/releases/download/v0.6.1/dockerize-alpine-linux-amd64-v0.6.1.tar.gz \
#     && tar -C /usr/local/bin -xzvf dockerize-alpine-linux-amd64-v0.6.1.tar.gz \
#     && rm dockerize-alpine-linux-amd64-v0.6.1.tar.gz

# # Set working directory
# WORKDIR /var/www

# # Remove the existing directory
# RUN rm -rf /var/www/html 

# # Symlink the public directory of your laravel application with /var/www/html
# RUN ln -s public html

# # Copy existing application directory
# COPY . /var/www

# # Create www user
# RUN useradd -G www-data,root -u 1000 -d /home/www www
# RUN mkdir -p /home/www/.composer && \
#     chown -R www:www-data /home/www

# # Change current user to www
# USER www

# # Expose port 9000 and start php-fpm server
# EXPOSE 9000
# CMD ["php-fpm"]

# # Run migrations after database is ready
# CMD dockerize -wait tcp://db:3306 -timeout 1m php artisan migrate