version:
	@echo Laravelの勉強用環境です

build:
	@docker-compose up -d --build
	# @make create-project

create-project:
	@if [ ! -e ./app ]; then \
		docker-compose exec laravel-study composer create-project laravel/laravel .; \
	fi;
	