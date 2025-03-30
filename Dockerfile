# Gunakan image resmi PHP dengan FPM
FROM php:8.2-fpm

# Install dependencies yang dibutuhkan
RUN apt-get update && apt-get install -y nginx unzip curl \
    && docker-php-ext-install pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory di dalam container
WORKDIR /app

# Copy seluruh project Laravel ke dalam container
COPY . .

# Install dependency Laravel dengan Composer
RUN composer install --no-dev --optimize-autoloader

# Set permission storage & bootstrap (biar Laravel bisa nyimpen file)
RUN chmod -R 777 storage bootstrap/cache

# Copy konfigurasi Nginx
COPY nginx.conf /etc/nginx/sites-available/default

# Expose port Railway
EXPOSE ${PORT}

# Jalankan Nginx dan PHP-FPM
CMD service nginx start && php-fpm
