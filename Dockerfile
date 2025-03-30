# Gunakan image resmi PHP dengan FPM dan ekstensi yang dibutuhkan
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project ke container
COPY . .

# Ubah permission storage dan bootstrap agar Laravel bisa menulis
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Copy konfigurasi Nginx
COPY docker/nginx.conf /etc/nginx/nginx.conf

# Expose port 80
EXPOSE 80

# Jalankan supervisord untuk PHP-FPM dan Nginx
CMD ["sh", "-c", "php-fpm & nginx -g 'daemon off;'"]
