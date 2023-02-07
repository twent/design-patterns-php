.SILENT:
.DEFAULT_GOAL: install

install:
	composer install

format:
	vendor/bin/phpcs && vendor/bin/phpcbf

test:
	vendor/bin/phpunit --testdox --no-progress

coverage:
	XDEBUG_MODE=coverage vendor/bin/phpunit --testdox --no-progress --coverage-text
