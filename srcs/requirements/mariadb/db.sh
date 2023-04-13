#!/bin/bash

# Variables
DB_NAME="wp"
DB_USER="saim"
DB_PASS="test123"

# Connect to MariaDB server as root and create database
mysql -u root -p -e "CREATE DATABASE IF NOT EXISTS $DB_NAME;"

# Create database user and grant privileges
mysql -u root -p -e "CREATE USER IF NOT EXISTS '$DB_USER'@'%' IDENTIFIED BY '$DB_PASS';"
mysql -u root -p -e "GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'%';"
mysql -u root -p -e "FLUSH PRIVILEGES;"

# Update MariaDB configuration to allow remote connections
sed -i '/^bind-address/s/127.0.0.1/0.0.0.0/' /etc/mysql/mariadb.conf.d/50-server.cnf

echo "Database created and configured successfully!"