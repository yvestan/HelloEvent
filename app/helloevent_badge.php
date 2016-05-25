<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 ff=unix fenc=utf8: */

/**
 *
 * Application principale
 *
 * @package   HelloEvent
 * @author    Yves Tannier [grafactory.net]
 * @copyright 2011 Yves Tannier
 * @link      http://www.grafactory.net/helloevent/ and http://helloscan.mobi
 * @license   http://fr.wikipedia.org/wiki/Licence_MIT MIT Licence
*/

// debug on/off
define('HE_DEBUG', false);

// debug
if(HE_DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', true);
}

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

// où sont les templates
if(!defined('HE_TPL_PATH')) {
    define('HE_TPL_PATH', dirname(__FILE__).'/templates/');
}

// language
if(file_exists(HE_APP_PATH.'/languages/'.HE_LOCALE.'.php')) {
    require HE_APP_PATH.'/languages/'.HE_LOCALE.'.php';
}

// utilities
require HE_APP_PATH.'/libs/Grafomatic/Grafomatic.php';

// subscribe
require HE_APP_PATH.'/libs/Daos/Subscribe.php';

// country
require HE_APP_PATH.'/libs/Daos/Country.php';

// PDO access
$pdo = new PDO('mysql:dbname='.HE_SQL_DB.';host='.HE_SQL_HOST, HE_SQL_USER, HE_SQL_PASS);

// classe subscribe
$subscribe = new Subscribe($pdo);

$values = $subscribe->getData(filter_var($_GET['token_subscribe'], FILTER_SANITIZE_STRING),'token_subscribe');

if(empty($values)) {
    echo 'Impossible de trouver les informations sur ce badge';
    exit;
}

// mpdf
require HE_APP_PATH.'/libs/mPDF/mpdf.php';

// filename
if(!defined('HE_PREFIX_FILENAME')) {
    define('HE_PREFIX_FILENAME', 'inscription_');
}

// public path
if(!defined('HE_WEB_PATH')) {
    define('HE_WEB_PATH', '../');
}

// to templates
$values['web_path'] = HE_WEB_PATH;

// ajouter le qrcode au valeurs
$name_pdf_file = HE_PREFIX_FILENAME.$values['token_subscribe'].'.pdf';
$template_pdf_file = HE_TPL_PATH.HE_LOCALE.'/pdf_template.html';

// on ajoute le PDF dans le répertoire
$filename = HE_APP_PATH.'/../pdfs/'.$name_pdf_file;

// si existant, le supprimer
if(file_exists($filename)) {
    @unlink($filename);
}
$pdf_data = Grafomatic::createPdf($template_pdf_file,$filename,$values);

// redirection
header('Location: ../pdfs/'.$name_pdf_file);
?>
