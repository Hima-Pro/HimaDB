FROM php:7.4-apache
# COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/
# RUN install-php-extensions pcntl mysqli
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
COPY . /var/www/html
WORKDIR /var/www/html

COPY cdn/assets/docker-entrypoint.sh /
RUN chmod +x /docker-entrypoint.sh
ENTRYPOINT ["/docker-entrypoint.sh"]
CMD ["apache2-foreground"]