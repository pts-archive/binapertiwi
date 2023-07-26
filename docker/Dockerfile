FROM php:8.1-fpm-alpine

ARG USERNAME=www-data
ARG GROUPNAME=www-data
ARG NEW_GROUP_ID=1000

RUN if getent passwd ${USERNAME} > /dev/null; then deluser ${USERNAME}; fi &&\
    if getent group ${GROUPNAME} > /dev/null; then delgroup ${GROUPNAME}; fi &&\
    addgroup -g ${NEW_GROUP_ID} ${GROUPNAME} &&\
    adduser --disabled-password --ingroup ${GROUPNAME} ${USERNAME}

RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini

RUN apk add --update --no-cache $PHPIZE_DEPS

RUN docker-php-ext-install pdo_mysql

RUN apk add --no-cache libzip-dev \
    && docker-php-ext-install zip

RUN apk add --no-cache libpng-dev freetype-dev libjpeg-turbo-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

RUN docker-php-ext-install bcmath

RUN wget https://getcomposer.org/composer-stable.phar -O /usr/local/bin/composer && chmod +x /usr/local/bin/composer


USER ${USERNAME}
