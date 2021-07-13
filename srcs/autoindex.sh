if grep -q "autoindex on;" /etc/nginx/sites-available/nginx_conf
then
    sed -i 's/autoindex on;/autoindex off;/' /etc/nginx/sites-available/nginx_conf
    nginx -s reload
elif grep -q "autoindex off;" /etc/nginx/sites-available/nginx_conf
then
    sed -i 's/autoindex off;/autoindex on;/' /etc/nginx/sites-available/nginx_conf
    nginx -s reload
fi
