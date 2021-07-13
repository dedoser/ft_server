service mysql start
echo "CREATE DATABASE wp_wordpress;" | mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wp_wordpress.* TO 'root'@'localhost';" | mysql -u root --skip-password
echo "update mysql.user set plugin='mysql_native_password' where user='root';" | mysql -u root --skip-password
echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password
# mysql -u --root --skip-password --execute="CREATE DATABASE wp_wordpress;\
# 				GRANT ALL PRIVILEGES ON wp_wordpress.* TO 'root'@'localhost';\
# 				FLUSH PRIVILEGES;\
# 				update mysql.user set plugin='mysql_native_password' where user='root';"


rm -rf /etc/nginx/sites-enabled/default
rm -rf /etc/nginx/sites-available/default
ln -s /etc/nginx/sites-available/nginx_conf /etc/nginx/sites-enabled/nginx_conf
mkdir -p /var/www/html
mv /usr/share/wordpress /var/www/html
mv phpMyAdmin-5.0.4-all-languages /var/www/html/phpmyadmin
mv pma/config.inc.php /var/www/html/phpmyadmin
mv pma/wp-config.php /var/www/html/wordpress
chmod 777 -R /var/lib/php/*
chown -R www-data:www-data /var/www/html/
chmod 775 -R /var/www/html/phpmyadmin /var/www/html
service php7.3-fpm start
service nginx start

sleep infinity
