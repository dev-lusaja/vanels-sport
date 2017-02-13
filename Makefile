.DEFAULT_GOAL := help

build: ## Builds docker images from the current project files
	docker-compose build

up: ## Creates and starts the docker containers with development settings
	docker-compose up -d
	docker-compose ps

down: ## Stops and removes the docker containers
	docker-compose down

restart: ## Restart all containers
	docker-compose restart
	docker-compose ps

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-16s\033[0m %s\n", $$1, $$2}'