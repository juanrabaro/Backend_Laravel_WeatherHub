# Use the official image as a parent image
FROM sail-8.3/app

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Set environment variables
ENV WWWUSER=${WWWUSER}
ENV LARAVEL_SAIL=1
ENV XDEBUG_MODE=${SAIL_XDEBUG_MODE:-off}
ENV XDEBUG_CONFIG=${SAIL_XDEBUG_CONFIG:-client_host=host.docker.internal}
ENV IGNITION_LOCAL_SITES_PATH=${PWD}

# Expose port 80
EXPOSE 80

# Run the command inside your image filesystem
CMD [ "php", "artisan", "serve", "--host=0.0.0.0", "--port=80" ]