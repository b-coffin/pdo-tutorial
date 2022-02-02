start:
	make up
	@echo "\nPlease access http://127.0.0.1:80"

finish:
	make down


# Docker

up:
	docker compose up -d --build

down:
	docker compose down --rmi all

restart:
	docker compose restart

exec-web:
	docker compose exec web bash

exec-db:
	docker compose exec db bash


# MySQL

login-mysql:
	docker compose exec db mysql -u root -h localhost -P 3306 -D homestead -psecret


# Git

# git-secrets導入
add-git-secrets:
	git secrets --install
	git secrets --register-aws

