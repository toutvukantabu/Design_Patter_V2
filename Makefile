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

PRIVILEGES = "GRANT ALL ON *.* TO 'someuser'@'%' IDENTIFIED BY 'complex-password';GRANT ALL ON *.* TO 'anl'@'%' IDENTIFIED BY 'NOUIQZOHQZOIUZQDIZJOQDI';GRANT ALL ON *.* TO 'extradbuser'@'%' IDENTIFIED BY 'NOUIQZOHQZOIUZQDIZJOQDI';FLUSH PRIVILEGES;"


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

fix-api: ## fix permission before down
	@sudo aa-remove-unknown 
	
##——————————————————————————————————————————————————————————————————————————————
##                        **  ENVIRONNEMENT  **
##——————————————————————————————————————————————————————————————————————————————
	
environnement: ## mise en place de l'environnement de dev .env, DBConnexion.php
	@cp site/Database/DBConnection_Example.php site/Database/DBConnection.php
	@cp .env-example .env
	@cp site/config/.env-example site/config/.env
	@cp site/config/private-example.pem site/config/private.pem
	@cp site/config/public-example.pem site/config/public.pem

delete-environnement : ## suppression des fichier d'environnement .env, DBConnexion.php
	@rm -r .env
	@rm -r site/Database/DBConnection.php
	@rm -r site/config/.env
	@sudo rm -r site/config/public.pem
	@sudo rm -r site/config/private.pem
##——————————————————————————————————————————————————————————————————————————————
##                       **  MYSQL  **
##——————————————————————————————————————————————————————————————————————————————A

dump-extranet:delete-extranet granted-extranet ## Dump db_extranet and remove old_bdd.sql
	${DOCKER} exec -i ${EXTRANET} mysqldump -u root -pexample db_extranet > DockerFiles/SQL/extranet/db_extranet.sql

dump-aln:delete-aln ## Dump db_remontee_aln and remove old_bdd.sql
	${DOCKER} exec -i ${ALN} mysqldump -u root -pexample db_remontee_aln > DockerFiles/SQL/aln/db_remontee_aln.sql 

dump-throttling: ## Dump db_throttling and remove old_bdd.sql
	${DOCKER} exec -i ${THROTTLING} mysqldump -u root -pexample db_throttling > DockerFiles/SQL/throttling/db_throttling.sql 

delete-aln: 
	@rm  DockerFiles/SQL/aln/db_remontee_aln.sql 

delete-extranet: 
	@rm  DockerFiles/SQL/extranet/db_extranet.sql 

delete-throttling: 
	@rm  DockerFiles/SQL/throttling/db_throttling.sql 

granted-extranet: ## accord all granted db_extranet
	${DOCKER} exec -i ${EXTRANET} mysql -u root -pexample db_extranet -e ${PRIVILEGES}

global-dump: dump-throttling dump-aln dump-extranet  ## making all dump database

##——————————————————————————————————————————————————————————————————————————————
##                        **  LOGS  **
##——————————————————————————————————————————————————————————————————————————————

logs-project: ##  API PROJECT container logs
	@docker logs $(PROJECT) 

logs-aln: ##  ALN container logs
	@docker logs $(ALN)

logs-throttling: ##  THROTTLLING container logs
	@docker logs $(THROTTLING)

logs-extranet: ##  MYSQLcontainer logs
	@docker logs $(EXTRANET)

##——————————————————————————————————————————————————————————————————————————————
##                       **   BASH ** 
##——————————————————————————————————————————————————————————————————————————————

project: ## Connecting to  API-PHP-API container
	$(DOCKER) exec -it  -w /app/  $(PROJECT)  sh

extranet:message-mysql ## Connecting to  MYSQL MYSQLcontainer
	$(DOCKER) exec -it  $(EXTRANET) mysql -u root -pexample db_extranet

aln:message-mysql ## Connecting to the MYSQL ALN container
	$(DOCKER) exec -it  $(ALN) mysql -u root -pexample db_remontee_aln

throttling:message-mysql ## Connecting to the MYSQL THROTTLING container
	$(DOCKER) exec -it  $(THROTTLING) mysql -u root -pexample db_throttling


##——————————————————————————————————————————————————————————————————————————————
##         **   STARTING // RE-BUILD // STOPPING // DUMP-AUTOLOAD ** 
##——————————————————————————————————————————————————————————————————————————————


build: docker-build up  ## Build project, Install vendors according to the current composer.lock file, create  environnement

stop:  down   ## fix-api, delete-environnement, stop docker

re-build : fix-api delete-environnement build ## rebuild project 

hard-reset: stop big-daddy environnement build  ## fix-api, stop, delete all docker files , restart project , create environnement

autoload: ## dump-autoload all containers
	@docker exec -it -w /app/ $(PROJECT) $(COMPOSER) dump-autoload -o
	
	
pest: ## start PEST tests
	@docker exec -w /app/ API-PHP-API sh -c "./vendor/bin/pes