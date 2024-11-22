FROM php:8.2-apache

# Install dependencies
RUN apt-get update && \
    apt-get install -y \
        libfreetype-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libzip-dev \
        zlib1g-dev \
        nodejs \
        npm && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install -j$(nproc) gd zip pdo_mysql && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

COPY . .


# Modifica las variables de entorno en el archivo .env
# Modifica las variables de entorno en el archivo .env
# Modifica las variables de entorno en el archivo .env
RUN sed -i 's/DB_HOST=127.0.0.1/DB_HOST=techxpressdb.cpk8e0q8c50d.us-east-1.rds.amazonaws.com/' .env \
    && sed -i 's/DB_DATABASE=homestead/DB_DATABASE=techxpress/' .env \
    && sed -i 's/DB_USERNAME=homestead/DB_USERNAME=root/' .env \
    && sed -i 's/DB_PASSWORD=root/DB_PASSWORD=02052004/' .env


#Install PHP dependencies
RUN composer install --no-scripts
RUN php artisan config:cache

# Install Node.js dependencies and build assets
RUN npm install && npm run build
RUN php artisan migrate
RUN php artisan migrate:refresh
RUN php artisan db:seed
RUN php artisan key:generate --force;

# Copy Apache configuration
COPY apache.conf /etc/apache2/sites-available/000-default.conf
# Enable Apache modules
RUN a2enmod rewrite

RUN chown -R www-data:www-data /var/www/html/storage
RUN chown -R www-data:www-data /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
