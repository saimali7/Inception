FROM debian:buster

ARG DB_NAME
ARG DB_USER
ARG DB_PASS
ARG ROOT_PASS

RUN apt-get update && apt-get install -y mariadb-server mariadb-client -y

RUN service mysql start && mysql -u root -e "CREATE DATABASE IF NOT EXISTS $DB_NAME; \
                                             CREATE USER IF NOT EXISTS '$DB_USER'@'%' IDENTIFIED BY '$DB_PASS'; \
                                             GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'%';FLUSH PRIVILEGES;\
                                             ALTER USER 'root'@'localhost' IDENTIFIED BY '$ROOT_PASS';"

RUN sed -i '/^bind-address/s/127.0.0.1/0.0.0.0/' /etc/mysql/mariadb.conf.d/50-server.cnf

EXPOSE 3306

ENTRYPOINT [ "mysqld" ]
