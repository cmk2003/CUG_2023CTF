FROM dasctfbase/web_php73_apache_mysql

COPY src /var/www/html
COPY ./db.sql /db.sql
RUN sh -c 'mysqld_safe &' && sleep 2s && mysql -e "source /db.sql;" -uroot -proot && rm -f /db.sql

EXPOSE 80
