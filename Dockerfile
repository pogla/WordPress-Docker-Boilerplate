FROM wordpress:4.8.1-php7.0-apache

COPY theme /usr/src/wordpress/wp-content/themes/theme
COPY advanced-custom-fields-pro /usr/src/wordpress/wp-content/plugins/advanced-custom-fields-pro

RUN { \
        echo 'memory_limit=512M'; \
        echo 'upload_max_filesize=100M'; \
        echo 'post_max_size=105M'; \
        echo 'max_execution_time=60'; \
    } > /usr/local/etc/php/conf.d/php-app.ini