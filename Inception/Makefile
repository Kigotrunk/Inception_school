NGINX_DOCKERFILE := ./nginx/Dockerfile
MARIADB_DOCKERFILE := ./mariadb/Dockerfile

build:
    @docker-compose build

up:
    @docker-compose up -d

down:
    @docker-compose down

restart:
    @docker-compose restart

nginx-logs:
    @docker-compose logs -f nginx

mariadb-logs:
    @docker-compose logs -f mariadb

wordpress-logs:
    @docker-compose logs -f wordpress

.PHONY: build up down restart nginx-logs mariadb-logs wordpress-logs
