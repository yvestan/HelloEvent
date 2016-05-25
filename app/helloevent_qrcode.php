<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 ff=unix fenc=utf8: */

/**
 *
 * HelloEvent for HelloScan autoconf
 *
 * @package   HelloEvent
 * @author    Yves Tannier [grafactory.net]
 * @copyright 2011 Yves Tannier
 * @link      http://www.grafactory.net/helloevent/
 * @license   http://fr.wikipedia.org/wiki/Licence_MIT MIT Licence
*/

// configuration
if(!file_exists(dirname(__FILE__).'/config/config.inc.php')) {
    echo 'Impossible de trouver le fichier de configuration / Unable to find configuration file';
    exit;
} else {
    include dirname(__FILE__).'/config/config.inc.php';
}

// où est l'app
if(!defined('HE_APP_PATH')) {
    define('HE_APP_PATH', dirname(__FILE__));
}

// où est l'app
if(!defined('HE_APP_NAME')) {
    define('HE_APP_NAME', 'HelloEvent');
}

// language
if(file_exists(HE_APP_PATH.'/languages/'.HE_LOCALE.'.php')) {
    require HE_APP_PATH.'/languages/'.HE_LOCALE.'.php';
}

// utilities
require HE_APP_PATH.'/libs/Grafomatic/Grafomatic.php';

if(empty($_GET['authkey']) || HE_AUTHKEY!=$_GET['authkey']) {
    echo Grafomatic::__('authkey_error');
    exit;
}

// URL de l'app
if(!defined('HE_APP_URL') && !empty($_SERVER['REQUEST_URI']) && !empty($_SERVER['HTTP_HOST'])) {
    define('HE_APP_URL', str_replace('qrcode.php','autoconf.php','http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']));
}

include HE_APP_PATH.'/libs/phpqrcode/qrlib.php';
QRcode::png(HE_APP_URL, false, 'H', 8, 1);
