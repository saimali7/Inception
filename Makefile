all:
	make down
	make fclean
	make build
	make up
	make ps

up:
	docker-compose -f srcs/docker-compose.yml  up -d

down:
	docker-compose -f srcs/docker-compose.yml down

build:
	mkdir -p /home/${USER}/data/wp
	mkdir -p /home/${USER}/data/db
	docker-compose -f srcs/docker-compose.yml build

ps:
	docker-compose -f srcs/docker-compose.yml ps

logs:
	docker-compose -f srcs/docker-compose.yml logs

itw:
	docker exec -it srcs-wordpress-1 /bin/bash

itn:
	docker exec -it srcs-nginx-1 /bin/bash

itm:
	docker exec -it srcs-mariadb-1 /bin/bash

fclean:
	rm -rf /home/${USER}/data/wp
	rm -rf /home/${USER}/data/db
