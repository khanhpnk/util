#!/bin/sh

# Example: ./set_up_virtual_host_php-fpm.sh la7.lc la7/public php7.3

HOST_NAME=$1
VHOST_FILE=$HOST_NAME.conf
DOCUMENT_ROOT=$2
PHP_VERSION=$3

# Create the Virtual Host File
sudo bash -c "cat > /etc/apache2/sites-available/$VHOST_FILE <<EOL
<VirtualHost *:80>
    ServerAdmin phamngockhanh262@gmail.com
    ServerName $HOST_NAME
    DocumentRoot /var/www/html/$DOCUMENT_ROOT

    <FilesMatch \.php$>
        #Apache 2.4.10+ use SetHandler to run PHP as fastCGI process server
        SetHandler \"proxy:unix:/run/php/$PHP_VERSION-fpm.sock|fcgi://localhost\"
    </FilesMatch>

    ErrorLog /var/log/apache2/error.log
    CustomLog /var/log/apache2/access.log combined
</VirtualHost>
EOL"

# Enable the Virtual Host Files
sudo a2ensite $VHOST_FILE

# Reload Apache
sudo systemctl reload apache2

# Set Up Local Hosts File
sudo bash -c "echo '127.0.0.1    $HOST_NAME' >> /etc/hosts"
