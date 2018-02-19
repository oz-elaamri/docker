# IMPORT FROM AN OFFICIAL PHP IMAGE

FROM php:7.0-apache
COPY . /var/www/html/
EXPOSE 80
ENTRYPOINT ["/bin/bash"]
CMD echo "ServerName localhost" >> /etc/apache2/apache2.conf && service apache2 restart
