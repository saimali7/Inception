
sed -i "s/Database_name/$WP_DB_NAME/" /var/www/wordpress/wp-config.php
sed -i "s/Database_user/$WP_DB_USER/" /var/www/wordpress/wp-config.php
sed -i "s/Database_password/$WP_DB_PASS/" /var/www/wordpress/wp-config.php

sudo -u www-data wp core install --url=localhost --title=newsite --admin_user=saim --admin_password=test123 --admin_email=saim@gmail.com --path='/var/www/wordpress'
sudo -u www-data wp user create user2 user2@gmail.com --user_pass=user123 --role=author --path='/var/www/wordpress'
php-fpm7.3 -F --nodaemonize