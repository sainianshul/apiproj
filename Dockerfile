FROM php:8.2-cli

# Install PHP extensions & system dependencies
RUN apt-get update && apt-get install -y \
    zip unzip curl git libpng-dev libonig-dev libxml2-dev \
    libzip-dev libssl-dev libcurl4-openssl-dev \
    && docker-php-ext-install pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy Laravel project files
COPY . .

# ✅ Copy .env file for Laravel to run commands like key:generate
COPY .env.example .env

# ✅ Set permissions for storage and cache
RUN chmod -R 775 storage bootstrap/cache

# ✅ Install dependencies
RUN composer install --no-dev --optimize-autoloader

# ✅ Expose the Laravel server port
EXPOSE 10000

# ✅ Run Laravel setup commands
CMD php artisan key:generate \
 && php artisan migrate --force \
 && php artisan serve --host=0.0.0.0 --port=10000
