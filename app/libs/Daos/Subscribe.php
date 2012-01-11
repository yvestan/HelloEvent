<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Classe de gestion des inscrits
 *
 * PHP version 5
 *
 * LICENSE: Ce programme est un logiciel libre distribué sous licence GNU/GPL
 *
 * @author     Yves Tannier <yves@grafactory.net>
 * @copyright  2006 Yves Tannier
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL License 2.1
 * @version    0.1.0 
 * @link       http://www.grafactory.net
 */

class Subscribe extends Grafomatic {

    //  {{{ Subscribe()

    /** Constructeur
     *
     * Le constructeur de classe hérite des valeurs du constructeur
     * de la classe mère 
     *
     * @see Grafomatic
     * @access public
     */
    public function __construct($pdo)
    {
        $this->table = 'subscribe';
        parent::__construct($pdo);
        $this->aliastable = 'sb';
        $this->idtable = 'id_subscribe';
        $this->fields = array(
            'id_subscribe',
            'date_insert',
            'date_update',
            'active',
            'date_active',
        );
        foreach($GLOBALS['he_fields'] as $f=>$v) {
            $this->fields[] = $f;
        }
	}
	
	// }}}

    //  {{{ subscribeExists()

    /** test si l'enregistrement existe
     *
     * Test si l'enregistrement exist à partir du token
     *
     * @access public
     * @param string $token_subscribe Le token
     * @return bool
     */
     public function subscribeExists($token_subscribe)
     {

         $r = $this->getData($token_subscribe,'token_subscribe');

         if(!empty($r) && $r['id_subscribe']>0) {
            return true;
         } else {
             return false;
         }

     }

     // }}}

}
?>
