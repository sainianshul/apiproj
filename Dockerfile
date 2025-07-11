FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    zip unzip curl git libpng-dev libonig-dev libxml2-dev \
    libzip-dev libssl-dev libcurl4-openssl-dev \
    && docker-php-ext-install pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

COPY .env.example .env

RUN chmod -R 775 storage bootstrap/cache

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN composer install --no-dev --optimize-autoloader

EXPOSE 10000

CMD php artisan key:generate \
 && php artisan serve --host=0.0.0.0 --port=10000
