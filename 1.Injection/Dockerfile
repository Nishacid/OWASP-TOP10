FROM php:7.4.14-apache

RUN apt update && \
    apt upgrade -y
   
RUN docker-php-ext-install pdo_mysql
RUN chmod 755 /var/www/html

EXPOSE 80
