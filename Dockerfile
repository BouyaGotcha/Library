FROM php:8.0-apache

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN apt-get update -qq && \
    apt-get install -qy \
    acl \
    git \
    gnupg \
    libicu-dev \
    libzip-dev \
    unzip \
    zip \
    zlib1g-dev && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Apache
COPY docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY docker/apache/apache.conf /etc/apache2/apache2.conf
COPY docker/apache/ports.conf /etc/apache2/ports.conf
#RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Php
COPY docker/php/php.ini-development $PHP_INI_DIR/php.ini-development
COPY docker/php/php.ini-production $PHP_INI_DIR/php.ini-production
COPY docker/php/php-cli.ini $PHP_INI_DIR/php-cli.ini

# PHP Extensions
RUN docker-php-ext-configure zip && \
    docker-php-ext-install -j $(nproc) intl opcache pdo_mysql zip

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Symfony
COPY ./app /var/www/

RUN set -eux; \
	mkdir -p /var/www/var/cache /var/www/var/log; \
	setfacl -dR -m u:www-data:rwX -m u:"$(whoami)":rwX /var/www/var; \
	setfacl -R -m u:www-data:rwX -m u:"$(whoami)":rwX /var/www/var; \
	chown -R www-data:www-data /var/www

VOLUME /var/www/var
VOLUME /var/www/public

WORKDIR /var/www

# Entrypoint
COPY docker/build/docker-entrypoint.sh /usr/local/bin/docker-entrypoint
RUN chmod +x /usr/local/bin/docker-entrypoint
ENTRYPOINT ["docker-entrypoint"]

# Healthcheck
COPY docker/build/docker-healthcheck.sh /usr/local/bin/docker-healthcheck
RUN chmod +x /usr/local/bin/docker-healthcheck
HEALTHCHECK --interval=10s --timeout=3s --retries=3 CMD ["docker-healthcheck"]

# Start
RUN a2enmod rewrite remoteip && \
    service apache2 restart

EXPOSE 8080

# Cmd
CMD ["apache2-foreground"]
