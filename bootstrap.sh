#!/usr/bin/env bash
cd /vagrant
sudo apt-get update
#curl
sudo apt-get install -y curl
#Apache2
sudo apt-get install -y apache2
a2enmod rewrite
sudo rm -v /var/www
sudo ln -fs /vagrant/ /var/www
#sudo cp /vagrant/setup/apache-default.conf /etc/apache2/sites-available/default.conf
#sudo a2ensite default
#sudo a2dissite 000-default
# 7z
sudo apt-get -y install p7zip
#PHP5
sudo apt-get -y install php5 php5-cli libapache2-mod-php5
sudo a2enmod php5
#pear
sudo apt-get -y install php-pear
#mcrypt
sudo apt-get -y install php5-mcrypt
sudo php5enmod mcrypt
#GD
sudo apt-get -y install php5-gd
#php curl
sudo apt-get -y install php5-curl
#RESTART Apache2
sudo service apache2 restart
#composer
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
#composer update
