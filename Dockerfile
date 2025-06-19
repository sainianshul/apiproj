FROM php:8.2-cli

# Install PHP extensions & system dependencies
RUN apt-get update && apt-get install -y \
    sqlite3 libsqlite3-dev zip unzip curl git \
    && docker-php-ext-install pdo pdo_sqlite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy Laravel project files
COPY . .

# Ensure .env file exists
COPY .env.example .env

# Create SQLite file if not exists
RUN mkdir -p database && touch database/database.sqlite

# Set permissions
RUN chmod -R 775 storage bootstrap/cache

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose port
EXPOSE 10000

# ✅ Run key generate, migrate, then start server
CMD php artisan key:generate \
 && php artisan migrate --force \
 && php artisan serve --host=0.0.0.0 --port=10000
