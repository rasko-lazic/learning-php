#!/usr/bin/env bash
cd /vagrant
sudo apt-get update
#curl
sudo apt-get install -y curl
#Apache2
sudo apt-get install -y apache2
a2enmod rewrite
<<<<<<< HEAD
#sudo rm -v /var/www
#sudo ln -fs /vagrant/ /var/www
sudo rm -rf /var/www
sudo ln -s /vagrant/ /var/www
=======
sudo rm -v /var/www
sudo ln -fs /vagrant/ /var/www
>>>>>>> f72edd4d659254a2af280e53c26a033d89348df4
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
<<<<<<< HEAD
#postgresql
sudo apt-get install postgresql-client
sudo apt-get install postgresql 
sudo apt-get install postgresql-contrib
#composer
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
#composer update
=======
#postgres
sudo apt-get install postgresql-client
#composer
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
#composer update
>>>>>>> f72edd4d659254a2af280e53c26a033d89348df4
