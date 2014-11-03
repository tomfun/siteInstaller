<?php
/**
 * Template for virtual host
 *
 * @author     tomfun
 */
// $name = aromateque
// $url = aromateque.test
 //$alias = www.aromateque.test
// $symlink =
?><VirtualHost *:80>

    ServerName <?php $url ?>
    ServerAlias <?php $alias ?>
    SetEnv MAGE_IS_DEVELOPER_MODE 1

    ServerAdmin tomfun1990@gmail.com
    DocumentRoot <?php $symlink ?>

    <Directory <?php $symlink ?>>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/<?php $name ?>-error.log
    CustomLog ${APACHE_LOG_DIR}/<?php $name ?>-access.log combined

</VirtualHost>

# vim: syntax=apache ts=4 sw=4 sts=4 sr noet
