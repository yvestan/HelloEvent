<!DOCTYPE html>
<html>
    <head>
        <title>Inscription en ligne</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="public/zebra/css/zebra_form.css">
        <link rel="stylesheet" href="public/css/helloevent.css">
        <script src="public/js/jquery-1.6.2.min.js"></script>
        <script src="public/zebra/javascript/zebra_form.js"></script>
        <style type="text/css">
        </style>
    </head>
    <body>
    <div id="global">

    <?php if(defined('HE_LOGO_HEAD')): ?>
    <div id="logo">
        <img src="<?php echo HE_LOGO_HEAD?>" alt="<?php echo HE_ALT_LOGO_HEAD?>" />
    </div>
    <?php endif; ?>

    <h1 id="titre">Inscription</h1>

    <?php if(!empty($error_form)): ?>
        <div class="Zebra_Form">
            <div class="error">
                <div class="container">
                    <span>Il y a eu un problème pendant votre inscription. Merci de réessayer ultérieurement.</span>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(!empty($success_form)): ?>
        <div id="success">
            Votre inscription  bien été prise en compte. Vous allez recevoir dans quelques minutes votre badge
                d'accès au format PDF <strong>à imprimer impérativement</strong>.
        </div>
    <?php endif; ?>

    <?php if(empty($success_form)): ?>

        <h2 class="titre_bleu_16">Complétez les informations suivantes</h2>
        <p style="font-style: italic;">Les questions précisées par <span style="font-weight: bold;color: red;">*</span> sont obligatoires</p>

        <?php $form->render(HE_FORM); ?>

    <?php endif; ?>

    <div class="footer"><a href="http://helloscan.mobi">HelloEvent by HelloScan</a> &amp; <a href="http://www.grafactory.net">grafactory.net</a></div>

    </div>
    </body>
</html>
