sudo -u www-data wp core install --url=localhost --title=newsite --admin_user=saim --admin_password=test123 --admin_email=saim@gmail.com --path='/var/www/wordpress'
php-fpm7.3 -F --nodaemonize