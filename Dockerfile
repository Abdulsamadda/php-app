FROM php:8.2-apache

# Note This Installs mysqli extension
RUN docker-php-ext-install mysqli

COPY . /var/www/html/

EXPOSE 80