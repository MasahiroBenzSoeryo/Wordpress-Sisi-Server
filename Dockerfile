FROM php:8.2-apache
WORKDIR /var/www/html
RUN apt-get update && \
    apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install pdo pdo_mysql gd mysqli && \
    docker-php-ext-enable mysqli
RUN pecl install redis docker-php-ext-enable redis
EXPOSE 80
CMD ["apache2-foreground"]