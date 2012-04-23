<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 ff=unix fenc=utf8: */

/**
 *
 * Gestion des inscrits
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

// security check
if(HE_ADMIN_PASS=='WARNING_CHANGE_THIS') {
    echo "You should change HE_ADMIN_PASS on configuration file";
    exit;
}
if(HE_AUTHKEY=='WARNING_CHANGE_THIS') {
    echo "You should change HE_AUTHKEY on configuration file";
    exit;
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

// adminer pref
function adminer_object() {
    // extends
    class AdminerSoftware extends Adminer {
        // name of app
        function name() {
            return HE_APP_NAME;
        }
        // credential
        function login($login, $password) {
            return ($login == HE_ADMIN_USER && $password == HE_ADMIN_PASS);
        }
        // server, username and password for connecting to database
        function credentials() {
            return array(HE_SQL_HOST, HE_SQL_USER, HE_SQL_PASS);
        }
        // database name, will be escaped by Adminer
        function database() {
            return HE_SQL_DB;
        }
        function tableName($tableStatus) {
            if($tableStatus['Name']=='helloevent_subscribe') {
                $tableStatus['Comment'] = 'Inscrit';
                return h($tableStatus['Comment']);
            }
        }
        function fieldName($field, $order = 0) {
            if(!empty($GLOBALS['translate_config'][$field['field']])) {
                return h($GLOBALS['translate_config'][$field['field']]);
            }
        }
    }
    return new AdminerSoftware;
}

// Adminer editor
include HE_APP_PATH.'/libs/Adminer/Adminer_editor.php';

?>
