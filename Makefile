.PHONY: help
help: ## Print this help with list of available commands/targets and their purpose
	@awk 'BEGIN {FS = ":.*##"; printf "\nUsage:\n  make \033[36m<target>\033[36m\033[0m\n"} /^[a-zA-Z_-]+:.*?##/ { printf "  \033[36m%-15s\033[0m %s\n", $$1, $$2 } /^##@/ { printf "\n\033[1m%s\033[0m\n", substr($$0, 5) } /^##~ [a-zA-Z_-]+:.*/ { printf "  \033[36m%-15s\033[0m %s\n", substr($$1, 5), $$2 }' $(MAKEFILE_LIST)

#
#--------------------------------------------------------------------------
##@ Build
#--------------------------------------------------------------------------
#

.PHONY: up
up: ##Build environment
	@docker-compose up -d && docker-compose exec -t php composer install

.PHONY: down
down: ##Close environment
	@docker-compose down

#
#--------------------------------------------------------------------------
##@ Environment interaction
#--------------------------------------------------------------------------
#

.PHONY: tests
tests: ##Execute tests
	@docker-compose exec php vendor/bin/phpunit tests

.PHONY: enter
ssh: ##Ssh to container
	@docker-compose exec php sh