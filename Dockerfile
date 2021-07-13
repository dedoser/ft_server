FROM	debian:buster

RUN		apt-get -y update && apt-get -y upgrade
RUN		apt-get -y install nginx
RUN		apt-get -y install wordpress
RUN		apt-get -y install default-mysql-server
RUN		apt-get -y install php7.3 php7.3-fpm \
		php-json php7.3-mysql php-mbstring
RUN		apt-get -y install openssl

COPY	srcs/domain.csr etc/ssl/
COPY	srcs/domain.key etc/ssl/
COPY	srcs/nginx_conf etc/nginx/sites-available
COPY	srcs/start.sh var/

RUN		mkdir -p pma
ADD		https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz /pma/phpmyadmin.tar.gz
RUN		tar -xvzf /pma/phpmyadmin.tar.gz

COPY	srcs/config.inc.php /pma
COPY	srcs/wp-config.php /pma
COPY	srcs/autoindex.sh /var

EXPOSE	80 443

CMD		bash var/start.sh



