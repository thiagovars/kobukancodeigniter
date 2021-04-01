FROM php:7.3-apache

ADD . /var/www/html/

WORKDIR /var/www/html/

RUN apt update && apt install -y zlib1g-dev libbz2-dev libzip-dev
RUN apt-get install -y zip git && docker-php-ext-install zip

RUN a2enmod rewrite deflate && ./composer.phar install

RUN chown -R www-data:www-data ./
RUN chmod -R 777 ./
