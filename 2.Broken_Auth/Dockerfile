FROM php:7.4.14-apache

COPY ./www/ /var/www/html/

RUN apt update && \
    apt upgrade -y

EXPOSE 80
