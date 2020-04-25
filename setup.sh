#!/bin/bash
if [ -f .env ]; then
  export $(cat .env | sed 's/#.*//g' | xargs)
  rm -f omeka-web/config/database.ini
  echo "user     = \"$MYSQL_USER\"" >omeka-web/config/database.ini
  echo "password = \"$MYSQL_PASSWORD\"" >>omeka-web/config/database.ini
  echo "dbname   = \"$MYSQL_DATABASE\"" >>omeka-web/config/database.ini
  echo "host     = \"omeka-db\"" >>omeka-web/config/database.ini
fi
chmod 600 traefik/acme.json
chown -R www-data:www-data omeka-web
