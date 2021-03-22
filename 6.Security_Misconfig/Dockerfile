FROM php:8.0-apache

RUN apt update && \
    apt upgrade -y

RUN rm -rf /var/www/html/*

COPY ./www/ /var/www/html/

EXPOSE 80