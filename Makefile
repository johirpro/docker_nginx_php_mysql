init:
	@echo "Docker init process initialization...";
	@make down
	@docker compose build;
	@make up
	@make composer-install;
	@make migrate-seed;
build:
	@docker compose build;
up:
	@docker compose up -d;
	@make ps
stop:
	@docker compose stop;
down:
	@docker compose down;
ps:
	@docker compose ps;
composer-install:
	@docker compose exec app composer install;
app-dev:
	@docker compose exec app yarn dev;
generate-laravel-key:
	@docker compose exec app php artisan key:generate;
migrate:
	@docker compose exec app php artisan migrate
migrate-seed:
	@docker compose exec app php artisan migrate:fresh --seed
front-build:
	@docker compose exec app yarn build;
yarn-install-all:
	@docker compose exec app yarn install;

