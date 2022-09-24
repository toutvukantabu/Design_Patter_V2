# Parameters
SHELL               	= bash
PROJECT             	= DESIGN_PATTERN
MYSQL  					= DESIGN_PATTERN-MYSQL
MAKEFILE_AUTHOR     	= Gwendal Bescont
HTTP_PORT_DESIGN_PATTERN= 8741
HTTP_PORT_EXTRANET  	= 3307
HTTP_PORT_THROTTLING	= 3308


# Executables
EXEC_PHP      = php
COMPOSER      = composer
GIT           = git

# Alias
PHP			  = $(EXEC_PHP) bin/console
# if you use php you can replace "with: $(EXEC_PHP) bin/console"

# Executables: local only
apt-get       = sudo apt-get
DOCKER        = docker
DOCKER_COMP   = docker-compose

# Misc
.DEFAULT_GOAL = help
.PHONY       = 

# Help message bash
define message-bash-mysql = 
——————————————————————————————————————————————————————————————————————————————
						 INFOS DE CONNEXION : 
——————————————————————————————————————————————————————————————————————————————

 pour se connecter à mysql en root :  1-> design_Patterns:     mysql -u root -p db_design_Patterns
			
 password : pattern 

endef

message-mysql:; @ $(info $(message-bash-mysql)) :

##——————————————————————————————————————————————————————————————————————————————
##                 **  VIEW FULL COMMAND  ** 
##——————————————————————————————————————————————————————————————————————————————

help: ## Outputs this help screen (viw full commands tape: make help )
	@grep -E '(^[a-zA-Z0-9_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}{printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'
##——————————————————————————————————————————————————————————————————————————————
##                    **   DOCKER  ** 
##——————————————————————————————————————————————————————————————————————————————

up: ## Starting docker hub 
	$(DOCKER_COMP) up -d

docker-build: ## Building docker images
	$(DOCKER_COMP) build 

down: ## Down docker hub
	$(DOCKER_COMP) down --remove-orphans

restart: ## restarting docker containers 
	$(DOCKER_COMP) restart $$(docker  -l -c )	

##——————————————————————————————————————————————————————————————————————————————
##                  **    Deleting container|volume|image commands **  
##——————————————————————————————————————————————————————————————————————————————

destroy: ## destroying  docker containers
	$(DOCKER_COMP) rm -v --force --stop || true

prune: ## removing all stopped containers 
	@docker system prune -a --volumes

delete-containers: ## deleting docker container
	$(Docker) rm -vf --force

big-daddy:  delete-environnement destroy prune delete-containers  ## delete all container, image, environnement

	
##——————————————————————————————————————————————————————————————————————————————
##                       **  MYSQL  **
##——————————————————————————————————————————————————————————————————————————————A

dump:delete  ## Dump db and remove old_bdd.sql
	${DOCKER} exec -i ${EXTRANET} mysqldump -u root -pexample db_design_Patterns.sql > .config/Database/db_design_Patterns.sql

delete: 
	@rm  .config/Database/db_design_Patterns.sql

##——————————————————————————————————————————————————————————————————————————————
##                        **  LOGS  **
##——————————————————————————————————————————————————————————————————————————————

logs-project: ##   container logs
	@docker logs $(PROJECT) 

logs-mysql: ##  MYSQL container logs
	@docker logs $(MYSQL)
##——————————————————————————————————————————————————————————————————————————————
##                       **   BASH ** 
##——————————————————————————————————————————————————————————————————————————————

project: ## Connecting to design_Patterns container
	$(DOCKER) exec -it  -w /app/  $(PROJECT)  sh

mysql:message-mysql ## Connecting to  MYSQL MYSQLcontainer
	$(DOCKER) exec -it  $(MYSQL) mysql -u root -pexample db_extranet

##——————————————————————————————————————————————————————————————————————————————
##         **   STARTING // RE-BUILD // STOPPING // DUMP-AUTOLOAD ** 
##——————————————————————————————————————————————————————————————————————————————


build: docker-build up  ## Build project, Install vendors according to the current composer.lock file, create  environnement

stop:  down   ## , delete-environnement, stop docker

hard-reset: stop big-daddy  build  ## , stop, delete all docker files , restart project , create environnement

autoload: ## dump-autoload all containers
	@docker exec -it -w /app/ $(PROJECT) $(COMPOSER) dump-autoload -o