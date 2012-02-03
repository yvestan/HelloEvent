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

// start session // démarrer la session
session_start();

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

// include the Zebra_Form class
require HE_APP_PATH.'/libs/Zebra_form/Zebra_Form.php';

// où sont les templates
if(!defined('HE_TPL_PATH')) {
    define('HE_TPL_PATH', dirname(__FILE__).'/templates/');
}

// generate qrcode
if(!empty($_GET['get_qrcode'])) {
    include HE_APP_PATH.'/libs/phpqrcode/qrlib.php';
    QRcode::png(filter_var($_GET['get_qrcode'], FILTER_SANITIZE_STRING), false, 'H', 4, 1);
    exit;
}

// instantiate a Zebra_Form object
$form = new Zebra_Form('form');

$form->doctype('xhtml');
$form->language(HE_LOCALE);
$form->show_all_error_messages(true);

// language
if(file_exists(HE_APP_PATH.'/languages/'.HE_LOCALE.'.php')) {
    require HE_APP_PATH.'/languages/'.HE_LOCALE.'.php';
}

// utilities
require HE_APP_PATH.'/libs/Grafomatic/Grafomatic.php';

// subscribe
require HE_APP_PATH.'/libs/Daos/Subscribe.php';

// PDO access
$pdo = new PDO('mysql:dbname='.HE_SQL_DB.';host='.HE_SQL_HOST, HE_SQL_USER, HE_SQL_PASS);

// classe subscribe
$subscribe = new Subscribe($pdo);

// generate fields
foreach($GLOBALS['he_fields'] as $f=>$v) {
    if($v['active']!==false) {
        // type
        $form->add('label', 'label_'.$f, $f, Grafomatic::__($f));
        // type de champs => text par défaut
        if(empty($v['type'])) {
            $v['type'] = 'text';
        }
        $obj = $form->add($v['type'], $f, '');
        // pour un select TODO
        /*if($v['type']=='select')) {
            $obj->add_options(array());
        }*/
        // controls rules
        if(!empty($v['controls'])) {
            foreach($v['controls'] as $c=>$cv) {
                $obj->set_rule(array(
                    $c =>  array('error', Grafomatic::__($f).' : '.Grafomatic::__('precision'))
                ));
            }
        }
    }
}

// validation
$form->add('submit', 'btnsubmit', Grafomatic::__('send_form'));

// validate the form
if ($form->validate()) {

    // tous les champs doivent-être vidé des entites html et sécurisés
    foreach($GLOBALS['he_fields'] as $f=>$v) {
        if(!empty($_POST[$f])) {
            // filtre
            if(!empty($v['filters'])) {
                foreach($v['filters'] as $filter) {
                    $values[$f] = filter_var($_POST[$f], $filter);
                }
            } else {
                // par defaut => filtre nettoyage de chaine
                $values[$f] = filter_var($_POST[$f], FILTER_SANITIZE_STRING);
            }
            // transformation avant enregistrement
            if(!empty($v['transforms'])) {
                foreach($v['transforms'] as $t) {
                    $values[$f] = mb_convert_case($values[$f], $t, HE_CHARSET);
                }
            }
        }
    }

    // générer un token
    $token_subscribe = strtoupper(uniqid());

    // ajouter la date d'inscription, le salon et l'année
    $values['token_subscribe'] = $token_subscribe;
    $values['date_insert'] = date('Y-m-d H:i:s');

    // créer l'enregistrement
    try {
        $subscribe->setUpdateFields($values);
        $id_subscribe = $subscribe->setData(null,true);
    } catch (Exception $e) {
        echo 'Exception : '. $e->getMessage();
        exit;
    }

    // instancie swiftmailer
    require HE_APP_PATH.'/libs/Swiftmailer/swift_required.php';

    // le transport proposé
    if(file_exists(HE_APP_PATH.'/transport.inc.php')) {
        include HE_APP_PATH.'/transport.inc.php';
    }

    // si aucun transport
    if(empty($transport)) {
        $transport = Swift_MailTransport::newInstance();
    }

    $mailer = Swift_Mailer::newInstance($transport);

    $rtl = "\n";

    // message au format HTML
    if(file_exists(HE_TPL_PATH.HE_LOCALE.'/mail_template.html')) {
        $message_html = Grafomatic::setMessage($values,HE_TPL_PATH.HE_LOCALE.'/mail_template.html');
    } else {
        echo 'Impossible de trouver le fichier '.HE_TPL_PATH.HE_LOCALE.'/mail_template.html';
        exit;
    }

    // message au format TXT
    if(file_exists(HE_TPL_PATH.HE_LOCALE.'/mail_template.txt')) {
        $message_txt = Grafomatic::setMessage($values,HE_TPL_PATH.HE_LOCALE.'/mail_template.txt',false);
    } else {
        echo 'Impossible de trouver le fichier '.HE_TPL_PATH.HE_LOCALE.'/mail_template.txt';
        exit;
    }

    // construire le message
    $message = Swift_Message::newInstance()
        ->setSubject(Grafomatic::__('subject_mail'))
        ->setFrom(array(HE_MAIL_FROM => HE_MAIL_FROM_NAME))
        ->setTo(array($values['email'] => $values['firstname'].' '.$values['lastname']))
        ->setBody($message_txt)
        ->addPart($message_html, 'text/html');

    // message pour l'admin
    $message_admin = Swift_Message::newInstance()
        ->setSubject(Grafomatic::__('subject_mail_admin'))
        ->setFrom(array(HE_MAIL_FROM => HE_MAIL_FROM_NAME))
        ->setTo(HE_MAIL_ADMIN)
        ->setBody($message_txt)
        ->addPart($message_html, 'text/html');

    // mpdf
    require HE_APP_PATH.'/libs/mPDF/mpdf.php';

    // charger depuis le disque ou générer à la volée
    $from_disk = false;

    // nom du fichier
    if(!defined('PREFIX_FILENAME')) {
        define('PREFIX_FILENAME', 'inscription_');
    }

    // ajouter le token
    $values['token_subscribe'] = $token_subscribe;

    // ajouter le qrcode au valeurs
    $name_pdf_file = PREFIX_FILENAME.$token_subscribe.'.pdf';
    $template_pdf_file = HE_TPL_PATH.HE_LOCALE.'/pdf_template.html';

    if(!file_exists($template_pdf_file)) {
        echo 'Impossible de trouver le fichier '.$template_pdf_file;
        exit;
    }

    // le pdf depuis le disque ou en live
    if($from_disk) {
        $filename = null;
        $pdf_data = Grafomatic::createPdf($template_pdf_file,$filename,$values);
        $message->attach(Swift_Attachment::fromPath($filename, 'application/pdf')->setFilename($name_pdf_file));
        $message_admin->attach(Swift_Attachment::fromPath($filename, 'application/pdf')->setFilename($name_pdf_file));
    } else {
        $pdf_data = Grafomatic::createPdf($template_pdf_file,null,$values);
        $attachment = Swift_Attachment::newInstance($pdf_data, $name_pdf_file, 'application/pdf');  
    }

    // piece jointe
    $message->attach($attachment);
    $message_admin->attach($attachment);

    // envoyer le message
    if($result = $mailer->send($message) && $result_admin = $mailer->send($message_admin)) {
        $success_form = true;
    } else {
        $error_form = true;
    }

}

// include homepage template
if(file_exists(HE_TPL_PATH.HE_LOCALE.'/index.php')) {
    include HE_TPL_PATH.HE_LOCALE.'/index.php';
} else {
    echo 'Impossible de trouver le fichier '.HE_TPL_PATH.HE_LOCALE.'/index.php';
}
?>
