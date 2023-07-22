FROM php:7.4.28-apache

COPY ./pukiwiki/ /var/www/html/

RUN mkdir /var/www/html/attach
RUN mkdir /var/www/html/backup
RUN mkdir /var/www/html/cache
RUN mkdir /var/www/html/counter
RUN mkdir /var/www/html/diff
RUN mkdir /var/www/html/wiki

RUN sed -ri -e 's!%h %l %u %t!%{X-Forwarded-For}i %l %u %t!g' /etc/apache2/apache2.conf

EXPOSE 80
