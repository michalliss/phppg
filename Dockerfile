FROM php:8.2.12-apache
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
COPY htdocs/ /var/www/html/