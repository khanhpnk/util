#!/bin/sh

# Example: set_up_virtual_host.sh la7.lc la7/public

HOST_NAME=$1
VHOST_FILE=$HOST_NAME.conf
DOCUMENT_ROOT=$2

# Create the Virtual Host File
sudo bash -c "cat > /etc/apache2/sites-available/$VHOST_FILE <<EOL
<VirtualHost *:80>
    ServerAdmin phamngockhanh262@gmail.com
    ServerName $HOST_NAME
    ServerAlias www.$HOST_NAME
    DocumentRoot /var/www/html/$2
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
