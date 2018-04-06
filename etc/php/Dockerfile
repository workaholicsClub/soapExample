FROM php:7.1-fpm

RUN rm /etc/apt/preferences.d/no-debian-php
RUN apt-get update && apt-get -y install libxml2-dev php-soap && docker-php-ext-install soap
