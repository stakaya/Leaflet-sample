FROM php:7.3-fpm

RUN apt-get update \
    && apt-get install -y \
                zlib1g-dev \
                libzip-dev \
                mariadb-client \
                git \
                zip \
                libfreetype6-dev \ 
                libjpeg62-turbo-dev \
                libpng-dev \
                libjpeg-dev \
    && docker-php-ext-install \
                pdo_mysql \
                bcmath \
                gd \
    && docker-php-ext-configure gd \
                --with-freetype-dir=/usr/include/ \
                --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd
