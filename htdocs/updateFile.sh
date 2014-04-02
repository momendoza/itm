#!/bin/bash
target=$1
origin=$2

cat ${origin} > /var/www/vhosts/${target}/htdocs/${origin}
#echo cat ${origin}  /var/www/vhosts/${target}/htdocs/${origin}
