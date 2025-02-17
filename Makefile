install:
	composer install

console:
	composer exec --verbose psysh

lint:
	./vendor/bin/phpcs --standard=PSR12 src tests
	

lint-fix:
	./vendor/bin/phpcbf --standard=PSR12 src tests

test:
	composer exec --verbose phpunit tests

test-coverage:
	XDEBUG_MODE=coverage composer exec --verbose phpunit tests -- --coverage-clover build/logs/clover.xml

test-coverage-text:
	XDEBUG_MODE=coverage composer exec --verbose phpunit tests -- --coverage-text
index: 
	./index
validate:
	composer validate
brain-calc:
	./brain-calc

