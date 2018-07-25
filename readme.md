# estoquelivro
Application to run laravel with docker-compose

## to run
 docker-compose up -d

## to execute migrate
 docker exec -ti mysql mysql -u homestead
 docker exec -ti -w /var/www/html php php artisan migrate

