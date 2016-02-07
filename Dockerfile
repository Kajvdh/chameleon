FROM php:5.6-apache
RUN a2enmod rewrite
RUN docker-php-ext-install mysql pdo pdo_mysql
ADD . /var/www/html/
CMD ["apache2-foreground"]
