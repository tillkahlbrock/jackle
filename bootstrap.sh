#!/usr/bin/env bash

apt-get update
apt-get install -y apache2 php5
rm -rf /var/www
ln -fs /vagrant/app /var/www
(cd /etc/apache2/mods-enabled && ln -sf ../mods-available/rewrite.load rewrite.load)
(cd /etc/apache2/mods-enabled && ln -sf ../mods-available/php5.load php5.load && ln -sf ../mods-available/php5.conf php5.conf)
service apache2 start
