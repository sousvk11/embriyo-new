install:
	docker exec laravel-app npm install && \
	docker exec laravel-app npm run build && \
	docker exec laravel-app composer install && \
	docker exec laravel-app composer update && \
	docker exec laravel-app chown -R www-data:www-data /var/www/html && \
	docker exec laravel-app chmod -R 775 /var/www/html






open-nginx:
	docker exec -it laravel-nginx bash
build:
	docker-compose build	
up:
	docker-compose up -d
down:
	docker-compose down

migratedb:
	docker exec laravel-app php artisan migrate --seed
 