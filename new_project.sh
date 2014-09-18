#!/bin/bash
if [ "$(id -u)" != "0" ]; then
   echo "This script must be run as root" 1>&2
   exit 1
fi

if [ "$#" -ne 1 ]; then
        echo "$0 <project name>"
        exit;
fi

# git repo
echo "creating git repo $1"
cp -r project-template "$1"
cd "$1"
rm -rf .git
git init
sed -i -e "s/project\-template/$1/g" application/config/app.php
git remote add origin "git@lifthousedesign.com:$1.git"
chown -R dev .
chgrp -R www-data .
chmod -R 775 assets/less
chmod -R 775 assets/css

# apache.conf
echo "appending to apache.conf"
echo "
<VirtualHost *:80>
    DocumentRoot \"/var/www/$1\"
    ServerName local.$1.com
    AllowEncodedSlashes On
    <Directory \"/var/www/$1\">
        Options Indexes FollowSymLinks
        AllowOverride All
        Allow from all
    </Directory>
</VirtualHost>" >> /home/dev/apache.conf

echo "appending to hosts"
echo "127.0.0.1       local.$1.com"|cat - /etc/hosts > /tmp/out && mv /tmp/out /etc/hosts

# db
echo "create database $1"
mysql -uroot -proot <<EOFMYSQL
create database $1;
EOFMYSQL
mysql -uroot -proot "$1" < dev/project-template.sql

service apache2 restart
echo "Done.";
echo "Remember to update the database credentials!!!";

