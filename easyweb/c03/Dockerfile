# 请务必保证该出能从 hub.docker.com 上拉取下来。
# 尽量使用能在 hub.docker.com 上查看到 Dockerfile，下载量高的官方认证镜像，推荐使用 https://github.com/DASCTF.
FROM ctftraining/base_image_nginx_php_73

# 拷贝源码到相应目录下。
COPY src /var/www

# 如需自定义 FLAG 请将自定义脚本覆盖到 /flag.sh
# COPY files/flag.sh /flag.sh

# 如需操作数据库请将 sql 文件拷贝到 /db.sql
# COPY files/db.sql /db.sql

# 如有上传文件等操作请务必将权限设置正确！
RUN chown -R www-data:www-data /var/www/html/ && \
    mv /var/www/flag.sh / && \
    chmod +x /flag.sh && \
    dos2unix /flag.sh

# 如需静态 FLAG 请在此利用环境变量声明
# ENV DASFLAG=DASCTF{flag_test}

# 请声明对外暴露端口
EXPOSE 80
