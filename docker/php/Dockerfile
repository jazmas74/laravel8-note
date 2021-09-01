FROM php:7.3.11-fpm

# COPY php.ini
COPY ./docker/php/php.ini /usr/local/etc/php/php.ini

RUN apt-get update \
  && apt-get install -y zlib1g-dev mariadb-client vim libzip-dev \
  && docker-php-ext-install zip pdo_mysql

#Composer install
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

RUN curl -sL https://deb.nodesource.com/setup_14.x | bash - \ 
    && apt-get update \
    && apt-get install -y nodejs

RUN npm install

#RUN npm i --save-dev laravel-mix@latest \
#    && npm i --save-dev sass-loader@latest \
#    && npm i --save-dev postcss@latest \
#    && npm i --save-dev webpack@latest

WORKDIR /var/www/html
