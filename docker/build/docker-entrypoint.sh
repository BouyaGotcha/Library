#!/bin/sh
set -xe

PHP_INI_FILE="$PHP_INI_DIR/php.ini-production"
if [ "$APP_ENV" != 'prod' ]; then
	PHP_INI_FILE="$PHP_INI_DIR/php.ini-development"
fi

ln -sf "$PHP_INI_FILE" "$PHP_INI_DIR/php.ini"

COMPOSER_FLAGS="--prefer-dist --no-progress --no-interaction --optimize-autoloader --no-ansi"

if [ "$APP_ENV" = 'prod' ]; then
	COMPOSER_FLAGS="${COMPOSER_FLAGS} --no-dev --classmap-authoritative"
fi

if [ -f "/var/www/composer.json" ]; then
  composer install ${COMPOSER_FLAGS}
fi

if [ "$APP_ENV" != 'test' ]; then
	until bin/console doctrine:query:sql "select 1" >/dev/null 2>&1; do
		(>&2 echo "Waiting for MySQL to be ready...")
		sleep 1
	done

	if [ "$(ls -A migrations/*.php 2> /dev/null)" ]; then
	  bin/console doctrine:migrations:migrate --no-interaction
	fi
fi

chown -R www-data:www-data /var/www/var

exec docker-php-entrypoint "$@"
