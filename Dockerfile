FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    sqlite3 libsqlite3-dev zip unzip curl git \
    && docker-php-ext-install pdo pdo_sqlite

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN chmod -R 775 storage bootstrap/cache
RUN composer install --no-dev --optimize-autoloader

EXPOSE 10000

CMD php artisan key:generate && php artisan serve --host=0.0.0.0 --port=10000
