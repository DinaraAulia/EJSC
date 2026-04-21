# Install lalu build package Node.JS
FROM node:22-alpine AS build-assets
WORKDIR /app
COPY . .
RUN rm -rf node_modules package-lock.json && \
    npm install && \
    npm run build

# Versi PHP dengan basis alpine
FROM php:8.4-fpm-alpine

# Install dependensi sistem & ekstensi PHP yang dibutuhkan Laravel
RUN apk add --no-cache \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    icu-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    oniguruma-dev \
    libxml2-dev

# Instal ekstensi PHP yang dibutuhkan
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install pdo_mysql gd bcmath mbstring exif pcntl zip intl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Salin kode aplikasi
COPY . .
COPY --from=build-assets /app/public/build ./public/build

# Install dependensi PHP
RUN git config --global --add safe.directory /var/www && \
    composer install --no-dev --optimize-autoloader

# Atur permission folder agar Laravel bisa write di storage dan cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]