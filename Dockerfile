FROM php:8.3-apache

RUN apt-get update && \
    apt-get install -y libapache2-mod-php default-libmysqlclient-dev && \
    docker-php-ext-install mysqli pdo pdo_mysql

COPY . /var/www/html/

RUN a2enmod rewrite

WORKDIR /var/www/html
