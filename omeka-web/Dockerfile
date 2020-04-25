FROM openmuseum/omeka-s

COPY ./config/.htaccess-production /usr/src/omeka-s/.htaccess
COPY ./config/database.ini /usr/src/omeka-s/config/database.ini
COPY ./config/local.config-production.php /usr/src/omeka-s/config/local.config.php
COPY ./config/php-production.ini /usr/local/etc/php/php.ini
RUN service apache2 restart