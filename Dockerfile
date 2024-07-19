FROM php:8-alpine
RUN docker-php-ext-install pdo pdo_mysql