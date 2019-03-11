all: update test

install:
	composer install

update:
	composer update

test:
	./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/*

serve: dump
	php -S localhost:8080 -t src/

dump:
	composer dump-autoload
