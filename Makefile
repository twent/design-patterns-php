.SILENT:
.DEFAULT_GOAL: install

install:
	composer install

format:
	phpcs && phpcbf

test:
	./vendor/bin/phpunit --testdox --no-progress
