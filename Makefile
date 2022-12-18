hello:
	@echo "Hello titii!"

cache:
   php apps/backoffice/backend/bin/console cache:clear

phpstan:
	vendor/bin/phpstan analyse --memory-limit=4352M --configuration phpstan.neon
