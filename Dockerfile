FROM php:8.1.3-fpm-alpine AS dev
WORKDIR /var/www/html
COPY src src
COPY composer.json composer.json
COPY composer.lock composer.lock

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer

RUN composer install

RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug-3.1.3 \
    && docker-php-ext-enable xdebug
    
#To debug you need to add entry in the hosts file, por exemplo: 192.168.1.9 host.docker.internal
RUN echo "xdebug.mode = debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.start_with_request = yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host = host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

FROM php:8.1.3-fpm-alpine AS prod
WORKDIR /var/www/html
COPY --from=dev /var/www/html/src src
COPY --from=dev /var/www/html/composer.json composer.json
COPY --from=dev /var/www/html/composer.lock composer.lock
COPY --from=dev /var/www/html/vendor vendor