FROM php:8.2-fpm-alpine

RUN set -eux && \
  apk update && \
  apk add --update --no-cache --virtual=.build-dependencies \
    autoconf \
    gcc \
    g++ \
    make \
    tzdata && \
  apk add --update linux-headers && \
  apk add oniguruma-dev && \
  apk add --update --no-cache \
    icu-dev \
    libzip-dev && \
  pecl install xdebug && \
  apk del .build-dependencies && \
  docker-php-ext-install -j$(nproc) mbstring intl pdo_mysql zip bcmath && \
  docker-php-ext-enable xdebug

