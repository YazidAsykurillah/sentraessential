FROM php:8.4-fpm

ARG UID=1000
ARG GID=1000

RUN apt-get update && apt-get install -y \
    git \
    curl \
    nano \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    libicu-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install \
    pdo \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    intl \
    zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN groupadd -g ${GID} laravel || true
RUN useradd -u ${UID} -g ${GID} -m laravel || true

WORKDIR /var/www

USER laravel