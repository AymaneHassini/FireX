# Using PHP with Apache as the base image
FROM php:8.3-apache as web

# Installing Additional System Dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip

# Clearing cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Enabling Apache mod_rewrite for URL rewriting
RUN a2enmod rewrite

# Setting ServerName to suppress warnings
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Installing PHP extensions
RUN docker-php-ext-install pdo_mysql zip

# Configuring Apache DocumentRoot to point to Laravel's public directory
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Setting the working directory
WORKDIR /var/www/html

# Copying the application code
COPY . /var/www/html

# **Copying the Docker-specific .env file into the container**
COPY .env.docker /var/www/html/.env

# Installing Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installing project dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Generating Laravel application key (if not set)
RUN if [ -z "$APP_KEY" ]; then \
    php artisan key:generate; \
    fi

# Setting permissions for storage and bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exposing port 80
EXPOSE 80

# Starting Apache in the foreground
CMD ["apache2-foreground"]
