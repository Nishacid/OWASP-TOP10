FROM php:7.4.14-apache

RUN apt update && \
    apt upgrade -y

RUN rm -rf /var/www/html/* && \
    mkdir /var/www/html/upload/ && \
    chmod 777 /var/www/html/upload 

ADD www/* /var/www/html/
ADD flag/* /var/www/

EXPOSE 80
