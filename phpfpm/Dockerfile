FROM php:8.2-fpm-bullseye

RUN apt-get update && \
    apt-get install -y micro default-libmysqlclient-dev && \
    docker-php-ext-install mysqli pdo_mysql && \

    echo "alias l='ls -CF'" >> /etc/bash.bashrc && \

    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

COPY ./php-fpm.d/www.conf /usr/local/etc/php-fpm.d/www.conf
COPY ./php/php.ini /usr/local/etc/php/php.ini

WORKDIR /usr/local/etc/
