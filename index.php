<?php 

if (version_compare(phpversion(), '7.0.0', '<') === true) {
    echo  '<div style="font:12px/1.35em arial, helvetica, sans-serif;">
            <div style="margin:0 0 25px 0; border-bottom:1px solid #ccc;">
                <h3 style="margin:0; font-size:1.7em; font-weight:normal; text-transform:none; text-align:left; color:#2f2f2f;">
                    Whoops, it looks like you have an invalid PHP version.</h3></div><p>Magento supports PHP 5.2.0 or newer.
                    <a href="http://www.magentocommerce.com/install" target="">Find out</a> how to install</a>
                    Magento using PHP-CGI as a work-around.</p></div>';
        exit;
}


/**
 * Error reporting
 */
error_reporting(E_ALL | E_STRICT);


echo file_get_contents('public/index.html');