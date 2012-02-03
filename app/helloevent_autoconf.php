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
    define('HE_APP_URL', 'http://'.str_replace('scan/autoconf.php', '', $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']));
}

header('Content-Type: application/xml'); 
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<helloscan>
    <button>
        <label value="<?php echo Grafomatic::__('btn_scan'); ?>"></label>
        <url value="<?php echo HE_APP_URL; ?>scan/?authkey=<?php echo HE_AUTHKEY; ?>&amp;action=get&amp;code=&lt;id&gt;"></url>
        <action value="true"></action>
        <color value="buttonBlue"></color>
        <displaycode value="false"></displaycode>
        <displayresult value="true"></displayresult>
        <displaydata value="true"></displaydata>
        <displayurl value="false"></displayurl>
        <displayraw value="false"></displayraw>
    </button>
    <button>
        <label value="<?php echo Grafomatic::__('btn_valid'); ?>"></label>
        <url value="<?php echo HE_APP_URL; ?>scan/?authkey=<?php echo HE_AUTHKEY; ?>&amp;action=active&amp;code=&lt;id&gt;"></url>
        <action value="false"></action>
        <color value="buttonGreen"></color>
        <displaycode value="false"></displaycode>
        <displayresult value="true"></displayresult>
        <displaydata value="false"></displaydata>
        <displayurl value="false"></displayurl>
        <displayraw value="false"></displayraw>
    </button>
</helloscan>
