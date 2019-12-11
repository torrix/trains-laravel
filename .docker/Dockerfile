FROM php:7.4-apache

MAINTAINER Matt Fletcher

COPY . /var/www/html
COPY .docker/php/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN apt-get update -qq && \
    apt-get install --yes -qq zlib1g-dev libicu-dev g++ curl git

RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
