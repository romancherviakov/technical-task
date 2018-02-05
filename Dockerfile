FROM php:7.0-apache

MAINTAINER Roman Cherviakov

COPY . /app
COPY vhost.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /app \
    && a2enmod rewrite