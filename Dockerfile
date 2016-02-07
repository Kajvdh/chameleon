FROM php:5.6-apache
RUN a2enmod rewrite
RUN docker-php-ext-install mysql pdo pdo_mysql
ADD . /var/www/html/
RUN mkdir /var/www/html/templates_c && mkdir /var/www/html/cache
RUN chmod 777 /var/www/html/templates_c
RUN chmod 777 /var/www/html/cache
CMD ["apache2-foreground"]
