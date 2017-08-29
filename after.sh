#!/bin/sh

# If you would like to do some extra provisioning you may
# add any commands you wish to this file and they will
# be run after the Homestead machine is provisioned.

# Updating sources
＃apt-get update

# Adding PHP-SOAP extension
＃apt-get install php-soap
＃sudo phpenmod soap

# Installer intl php extension
＃apt-get install php-intl

# Install wkhtmltopdf
# http://xfloyd.net/blog/?p=745
＃sudo apt-get install xvfb
＃sudo apt-get install xfonts-75dpi
＃wget http://download.gna.org/wkhtmltopdf/0.12/0.12.2.1/wkhtmltox-0.12.2.1_linux-trusty-amd64.deb
＃sudo dpkg -i wkhtmltox-0.12.2.1_linux-trusty-amd64.deb
＃echo 'exec xvfb-run -a -s "-screen 0 640x480x16" wkhtmltopdf "$@"' | sudo tee /usr/local/bin/wkhtmltopdf.sh >/dev/null
＃sudo chmod a+x /usr/local/bin/wkhtmltopdf.sh

# Remove group by strict rule
# https://www.sitepoint.com/quick-tip-how-to-permanently-change-sql-mode-in-mysql/
