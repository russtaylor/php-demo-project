# 
# Production environment for php-demo-project
#

FROM php:apache

COPY apache.conf /etc/apache2/sites-available/000-default.conf
COPY app/ /var/www/html

WORKDIR /var/www/html

EXPOSE 80