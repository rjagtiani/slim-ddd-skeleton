FROM php:8.1.0-fpm-alpine3.15

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
CMD [ "php", "-S", "0.0.0.0:9000", "/var/www/html/public/index.php" ]