#!/bin/sh
set -e

XDEBUG_INI=/usr/local/etc/php/conf.d/xdebug.ini
if [[ "${CROSSLEND_XDEBUG_ENABLE}" != "1" ]]; then
    echo "Disabling XDebug Configuration"
    rm -f ${XDEBUG_INI}
fi

# first arg is `-f` or `--some-option`
if [ "${1#-}" != "$1" ]; then
	set -- php-fpm "$@"
fi

if [ "$1" = 'php-fpm' ] || [ "$1" = 'bin/console' ]; then
	mkdir -p var/cache var/log
	setfacl -R -m u:www-data:rwX -m u:"$(whoami)":rwX var
	setfacl -dR -m u:www-data:rwX -m u:"$(whoami)":rwX var

	if [ "$APP_ENV" == 'dev' ]; then
		bin/setup
	fi
fi

exec docker-php-entrypoint "$@"
