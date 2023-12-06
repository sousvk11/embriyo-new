#!/bin/sh

npm install && npm update

npm run build 
 
composer install && composer update 

chown -R :www-data /var/www/html 

chmod -R 777 /var/www/html

service apache2 start

tail -f /dev/null