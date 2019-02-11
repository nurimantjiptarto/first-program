all: update test

install:
	composer install

update:
	composer update

test:
	./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/*
