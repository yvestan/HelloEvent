<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 ff=unix fenc=utf8: */

/**
 *
 * Config file
 *
 * @package   HelloEvent
 * @author    Yves Tannier [grafactory.net]
 * @copyright 2011 Yves Tannier
 * @link      http://www.grafactory.net/helloevent/ and http://helloscan.mobi
 * @license   http://fr.wikipedia.org/wiki/Licence_MIT MIT Licence
*/

// copy address / copie de l'inscription (laissez vide pour ne pas la recevoir)
define('HE_MAIL_ADMIN', 'me@example.tld');

// admin list / liste des admins
$GLOBALS['HE_LIST_MAIL_ADMIN'] = array(
    //'other@example.tld' => 'John Doe',
);

// mail from address / provenance du message
define('HE_MAIL_FROM', 'me@example.tld');

// mail from name / nom de provenance du message
define('HE_MAIL_FROM_NAME', 'HelloEvent');

// Database information / informations de connexion à la base de données
define('HE_SQL_HOST', 'localhost');
define('HE_SQL_USER', 'sql_user');
define('HE_SQL_PASS', 'sql_pass');
define('HE_SQL_DB', 'sql_db');

// backoffice credentials / codes d'accès au backoffice
define('HE_ADMIN_USER', 'admin');
define('HE_ADMIN_PASS', 'WARNING_CHANGE_THIS');

// scan authkey / clé d'authentification pour le scan de qrcode
define('HE_AUTHKEY', 'WARNING_CHANGE_THIS');

// configure field / configurer les champs

// options :
/*'field_name' => array(
    // required : activate or desactivate this field / requis : activer ou désactiver de champ
    'active' => true,
     // optionnal : control(s) on this field / optionnel : controle(s) sur ce champ
    // see possible values / voir les valeur possibles sur http://stefangabos.ro/wp-content/docs/Zebra_Form/Generic/Zebra_Form_Control.html#methodset_rule
    'controls' => array(
        'required' => true
    ),
    // optionnal : afficher ou non dans le backoffice
    'backoffice' => true,
    // optionnal : afficher ou non sur l'application HelloScan
    'scanvisible' => true,
    // optionnal : value transform before insert on DB / optionnel : modifier les valeurs avant l'insertion en base
    // see possible values / voir les valeur possibles sur http://php.net/manual/fr/function.mb-convert-case.php
    // MB_CASE_UPPER, MB_CASE_LOWER, ou MB_CASE_TITLE 
    'transforms' => array(
        MB_CASE_UPPER
    ),
    // optionnal : filter (FILTER_SANITIZE_STRING) by default :  filtre (FILTER_SANITIZE_STRING) par défaut
    // see possible values / voir les valeur possibles sur http://php.net/manual/fr/filter.filters.sanitize.php
    'filters' => array(
        FILTER_SANITIZE_EMAIL
    ),
),*/

$GLOBALS['he_fields'] = array(
    'lastname' => array(
        'active' => true,
        'controls' => array(
            'required' => true
        ),
        'transforms' => array(
            MB_CASE_UPPER
        ),
        'scanvisible' => true,
     ),
    'firstname' => array(
        'active' => true,
        'controls' => array(
            'required' => true
        ),
        'scanvisible' => true,
     ),
    'email' => array(
        'active' => true,
        'controls' => array(
            'required' => true,
            'email' => true
        ),
        'filters' => array(
            FILTER_SANITIZE_EMAIL
        ),
        'transforms' => array(
            MB_CASE_LOWER
        ),
     ),
    'tel' => array('active' => false),
    'mobile' => array('active' => false),
    'address' => array('active' => false),
    'birth_date' => array('active' => false),
    'zip_code' => array('active' => false),
    'city' => array('active' => false),
    'id_country' => array('active' => false),
    'business_company' => array('active' => false),
    'business_function' => array('active' => false),
    'business_mobile' => array('active' => false),
    'business_email' => array('active' => false),
    'business_address' => array('active' => false),
    'business_zip_code' => array('active' => false),
    'business_city' => array('active' => false),
    'business_country' => array('active' => false),
    'business_website' => array('active' => false),
    'shipping_address' => array('active' => false),
    'shipping_zip_code' => array('active' => false),
    'shipping_city' => array('active' => false),
    'shipping_country' => array('active' => false),
    'blog' => array('active' => false),
    'http_referer' => array('backoffice' => false, 'special' => true), // referer
    'partner' => array('backoffice' => true, 'special' => true), // partner
    'badge' => array('backoffice' => true, 'special' => true), // badge
    'date_insert' => array('backoffice' => true, 'active' => false),
    'date_update' => array('backoffice' => true, 'active' => false),
    'active' => array('backoffice' => true, 'active' => false),
    'token_subscribe' => array('backoffice' => true, 'active' => false),
);

// locale / langue
define('HE_LOCALE', 'french');

// only one badge by email / seulement un badge par mail
define('HE_RESTRICT_EMAIL', false);

// logo and alternative text / logo et texte alternatif
//define('HE_LOGO_HEAD', 'public/helloevent.png');
//define('HE_ALT_LOGO_HEAD', 'HelloEvent by HelloScan');

// filename prefix / prefix fichier
define('HE_PREFIX_FILENAME', 'inscription_');

// web path / chemin web
//define('HE_WEB_PATH', '/');

// optionnal / optionel

// application path / chemin vers l'application
//define('HE_APP_PATH', '/your/path/app');

// your form / votre formulaire
// see : http://stefangabos.ro/wp-content/demos/Zebra_Form/
define('HE_FORM', '*horizontal');

// templates path / chemin vers le répertoire de templates
//define('HE_APP_PATH', '/your/path/app/templates/');

// charset
define('HE_CHARSET', 'UTF-8');

?>
