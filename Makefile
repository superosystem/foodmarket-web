run:
	php artisan serve

test:
	./vendor/bin/phpunit

controller:
	php artisan make:controller $(name) --resource

controller-api:
	php artisan make:controller Api/$(name)

model:
	php artisan make:model $(name)

migrate:
	php artisan migrate

migrate-fresh:
	php artisan migrate:fresh

migrate-reset:
	php artisan migrate:reset

migrations:
	php artisan make:migration $(name)

seeder:
	php artisan make:seeder $(name)

seed:
	php artisan db:seed

db-container-start:
	docker compose -f docker-compose-dev.yml up

db-container-stop:
	docker compose -f docker-compose-dev.yml down
