#!/bin/sh
set -e

if [ "$APP_ENV" != 'test' ]; then
	curl -f 0.0.0.0:8080/login || exit 1
fi

exit 0

