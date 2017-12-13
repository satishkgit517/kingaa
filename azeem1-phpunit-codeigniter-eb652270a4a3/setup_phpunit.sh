!/bin/bash
# This script installs necessary plugins those are related to PHPunit,DBUnit 
# Author:Azeem <jazeem.lk@gmail.com>  

  echo "Installing PHPUnit and DBUit..."
  sudo pear upgrade PEAR
  sudo pear config-set auto_discover 1
  sudo pear install pear.phpunit.de/PHPUnit
  sudo pear install phpunit/DbUnit
  echo "Installing code snifer.."
  sudo apt-get update
  sudo pear install PHP_CodeSniffer

  echo "installing php dependend..."
  sudo pear channel-discover pear.pdepend.org
  sudo pear install pdepend/PHP_Depend-beta

  echo "installing PHPCPD..."
  pear channel-discover pear.phpunit.de
  pear install phpunit/phpcpd

 echo "installing php_ab..."
  sudo wget -N –no-check-certificate -O /bin/phpab http://phpab.net/phpab-1.10.3.phar
  sudo chmod +x /bin/phpab

  echo "installing ANT..."
  apt-get install ant php5-xsl php5-xdebug libxml2-utils
