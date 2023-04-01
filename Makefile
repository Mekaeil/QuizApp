.DEFAULT_GOAL := help

## -- Section Delimiter --

## This help message
## Which can also be multiline
.PHONY: help
help:
	@printf "Usage\n";

	@awk '{ \
			if ($$0 ~ /^.PHONY: [a-zA-Z\-\_0-9]+$$/) { \
				helpCommand = substr($$0, index($$0, ":") + 2); \
				if (helpMessage) { \
					printf "\033[36m%-20s\033[0m %s\n", \
						helpCommand, helpMessage; \
					helpMessage = ""; \
				} \
			} else if ($$0 ~ /^[a-zA-Z\-\_0-9.]+:/) { \
				helpCommand = substr($$0, 0, index($$0, ":")); \
				if (helpMessage) { \
					printf "\033[36m%-20s\033[0m %s\n", \
						helpCommand, helpMessage; \
					helpMessage = ""; \
				} \
			} else if ($$0 ~ /^##/) { \
				if (helpMessage) { \
					helpMessage = helpMessage"\n                     "substr($$0, 3); \
				} else { \
					helpMessage = substr($$0, 3); \
				} \
			} else { \
				if (helpMessage) { \
					print "\n                     "helpMessage"\n" \
				} \
				helpMessage = ""; \
			} \
		}' \
		$(MAKEFILE_LIST)


###################################################################################################
#########################                  INSTALLING                     #########################
###################################################################################################

## INSTALLING AND RUNNING DOCKER
.PHONY: install
install:
	composer install
	cd deployment && docker-compose up -d --force-recreate && docker-compose build --force-rm
	docker exec -it quiz-app cp .env.example .env
	docker exec -it quiz-app php artisan key:generate
	docker exec -it quiz-app php artisan migrate
	exit 0

## MIGRATE TABLE
.PHONY: table
table:
	docker exec -it quiz-app php artisan migrate
	exit 0


###################################################################################################
#########################                USEFUL COMMANDS                  #########################
###################################################################################################

## Clear Cache
.PHONY: clear
clear:
	php artisan route:clear
	php artisan view:clear
	php artisan config:clear
	php artisan cache:clear
	php artisan config:cache
	exit 0

## RUNNING TESTCASES
.PHONY: test
test:
	php artisan test
	exit 0

## FIXING CODE STYLES
.PHONY: pint
pint:
	./vendor/bin/pint
	exit 0


###################################################################################################
#########################            USER COMPONENT COMMANDS              #########################
###################################################################################################

## RUNNING USER'S SEEDERS
.PHONY: user-seed
user-seed:
	php artisan db:seed --class=QuizApp\\Presentation\\Quiz\\Console\\Seeds\\DatabaseSeeder
	exit 0
