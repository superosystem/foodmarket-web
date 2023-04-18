migrate:
	php artisan migrate

migrate-fresh:
	php artisan migrate:fresh

migrate-reset:
	php artisan migrate:reset

migrations:
	php artisan make:migration $(name)

db-container-start:
	docker compose -f docker-compose-dev.yml up

db-container-stop:
	docker compose -f docker-compose-dev.yml down
