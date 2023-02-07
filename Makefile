.SILENT:
.DEFAULT_GOAL: install

install:
	composer install

test:
	./vendor/bin/phpunit --testdox --no-progress
