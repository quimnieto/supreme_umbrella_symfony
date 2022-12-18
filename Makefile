hello:
	@echo "Hello titii!"

phpstan:
	vendor/bin/phpstan analyse --memory-limit=4352M --configuration phpstan.neon
