#!/bin/bash
PHPINI=/usr/local/etc/php/php.ini
echo 'zend_extension='$(find /usr/local/lib/php/extensions/ -name xdebug.so)>>$PHPINI;
echo 'xdebug.remote_enable=1'>>$PHPINI;
echo 'xdebug.remote_autostart=0'>>$PHPINI;
echo 'xdebug.remote_connect_back=0'>>$PHPINI;
echo "xdebug.remote_host=$XDEBUG_REMOTE_HOST">>$PHPINI;
echo 'xdebug.remote_handler=dbgp'>>$PHPINI;
echo 'xdebug.remote_port=9000'>>$PHPINI;
echo 'xdebug.profiler_enable=0'>>$PHPINI;

echo -e "\e[31m---------------------------------\e[0m"
echo -e "\e[31mXdebug is enabled!\e[0m"
echo -e "\e[31m---------------------------------\e[0m"