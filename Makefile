version:
	@echo Laravelの勉強用環境です

build:
	@docker-compose up -d --build
	@make composer-install
	@make create-project

create-project:
	@if [ ! -e ./app ]; then \
		docker-compose exec laravel-study composer create-project laravel/laravel .; \
	fi;

composer-install:
	@docker-compose exec laravel-study composer install

create_env:
	@mv ./app/.env.example ./app/.env
	