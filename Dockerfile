FROM php:7.4.28-apache

COPY ./pukiwiki/ /var/www/html/

RUN mkdir /var/www/html/attach
RUN mkdir /var/www/html/backup
RUN mkdir /var/www/html/cache
RUN mkdir /var/www/html/counter
RUN mkdir /var/www/html/diff
RUN cd /var/www/html
RUN chmod 755 . && chmod 644 *.php && chmod 644 *.lng.php && chmod 777 ./attach  && chmod 777 ./backup  && chmod 777 ./cache  && chmod 777 ./counter  && chmod 777 ./diff  && chmod 777 ./wiki  && chmod 666 ./wiki/*.txt && chmod 755 ./image  && chmod 644 ./image/*.png && chmod 644 ./image/*.gif && chmod 755 ./image/face  && chmod 644 ./image/face/*.png && chmod 755 ./lib && chmod 644 ./lib/*.php && chmod 755 ./plugin  && chmod 644 ./plugin/*.php && chmod 755 ./skin  && chmod 644 ./skin/*.php && chmod 644 ./skin/*.css 

RUN sed -ri -e 's!%h %l %u %t!%{X-Forwarded-For}i %l %u %t!g' /etc/apache2/apache2.conf

EXPOSE 80
