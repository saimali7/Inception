FROM debian:buster 

RUN apt-get update && apt-get install -y mariadb-server mariadb-client -y

COPY db.sh /tmp
RUN chmod +x /tmp/db.sh

RUN service mysql start && /tmp/db.sh

EXPOSE 3306

ENTRYPOINT [ "mysqld" ]