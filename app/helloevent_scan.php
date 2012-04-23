<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 ff=unix fenc=utf8: */

/**
 *
 * HelloEvent for HelloScan
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

// debug ?
define('HE_DEBUG', false);

// utilities
require HE_APP_PATH.'/libs/Grafomatic/Grafomatic.php';

// subscribe
require HE_APP_PATH.'/libs/Daos/Subscribe.php';

// get params from helloscan request
class HelloEvent_RequestParams {

    // code from scan result
    public $code = null;

    // action from app
    public $action = null;

    // action from app
    public $authkey = null;

    // possible actions
    protected $actions = array(
        'get',
        'active',
        'inactive',
    );

    // {{{ getCode()

    /** get code => token_subscribe
     *
     */
    public function getCode() 
    {
        if(!empty($_GET['code'])) {
            return $this->code = filter_var($_GET['code'], FILTER_SANITIZE_STRING);
        }
        return false;
    }

    // }}}

    // {{{ codeExist()

    /** check subscriber code
     *
     */
    public function codeExist() 
    {
        if(!$this->getCode()) {
            return false;
        }
        return true;
    }

    // }}}

    // {{{ getAction()

    /** get action (get, active, inactive...)
     *
     */
    public function getAction() 
    {
        if(!empty($_GET['action']) && in_array($_GET['action'], $this->actions)) {
            return $this->action = htmlspecialchars($_GET['action']); 
        }
        return false;
    }

    // }}}

    // {{{ getAuthKey()

    /** get authentification key
     *
     */
    public function getAuthKey() 
    {
        if(!empty($_GET['authkey'])) {
            return $this->authkey = filter_var($_GET['authkey'], FILTER_SANITIZE_STRING); 
        }
        return false;
    }

    // }}}

}

// check autorisation key
class HelloEvent_AuthKey {

    // request params
    protected $params = null;

    // {{{ __construct()

    /** constructeur
     *
     * @param object $params request parameters
     */
    public function __construct($params) 
    {
        $this->params = $params;
    }

    // }}}

    // {{{ check()

    /** auth key / compare with saved authkey on config file
     *
     */
    public function check() 
    {
        if($this->params->getAuthKey() 
            && HE_AUTHKEY==$this->params->getAuthKey()) {
            $this->authkey = $this->params->getAuthKey();
            return true;
        }
        return false;
    }

    // }}}

}
   
// check subscriber code and perform actions
class HelloEvent_Check {

    // request params
    protected $params = null;

    // subscribe class
    protected $subscribe = null;
       
    // subscriber fields rturn format json
    private $return_fields = array(
        'id_subscribe',
        'date_insert',
        'date_update',
        'active',
        'token_subscribe',
    );

    // debug mode
    private $debug = HE_DEBUG;

    // {{{ __construct()

    /** constructeur
     *
     * @param object $params request parameters
     */
    public function __construct($params) 
    {
        $this->params = $params;

        $this->subscribe = new Subscribe(new PDO('mysql:dbname='.HE_SQL_DB.';host='.HE_SQL_HOST, HE_SQL_USER, HE_SQL_PASS));

        // return active fields
        foreach($GLOBALS['he_fields'] as $f=>$v) {
            if(!empty($v['active']) && $v['active']===true) {
                $this->return_fields[] = $f;
            }
        }
    }

    // }}}

    // {{{ checkSubscriberByCode()

    /** check if code is associate with subscriber
     *
     */
    public function checkSubscriberByCode() 
    {

        // find subscriber by token_subscribe
        if($this->subscribe->subscribeExists($this->params->getCode())) {
            $subscriber = $this->subscribe->getData($this->params->getCode(),'token_subscribe');
            return $subscriber;
        } else {
            return false;
        }

    }

    // }}}

    // {{{ get()

    /** get subscriber infos from code
     *
     * @return array
     */
    public function get()
    {

        if($subscriber = $this->checkSubscriberByCode()) {
            foreach($subscriber as $k=>$v) {
                if(in_array($k, $this->return_fields) && $v!=null && $v!='') {
                    $subscriber_tabs[Grafomatic::__($k)] = $v;
                }
            }
            return array(
                'status' => 200,
                'result' => 'Subscriber informations',
                'data' => $subscriber_tabs,
            );
        } else {
           return array(
                'status' => 404,
                'result' => 'No subscriber found',
           );
        }
    }

    // }}}

    // {{{ active()

    /** add 1 subscriber from stock
     *
     * @return array
     */
    public function active() 
    {
        if($subscriber = $this->checkSubscriberByCode()) {
            if($subscriber['active']==1) {
                return array(
                    'status' => '500',
                    'result' => 'Subscriber ever activate'
                );
            } elseif($this->subscribe->setActive($subscriber['id_subscribe'],1)) {
                return array(
                    'status' => '200',
                    'result' => 'Subscriber activate'
                );
            } else {
                return array(
                    'status' => '500',
                    'result' => 'Error during subscriber activation'
                );
            }
        } else {
           return array(
                'status' => 404,
                'result' => 'No subscriber found to activate',
           );
        }
    }

    // }}}

    // {{{ inactive()

    /** inactive subscriber
     *
     * @return array
     */
    public function inactive() 
    {
        if($subscriber = $this->checkSubscriberByCode()) {
            if($subscriber['active']==0) {
                return array(
                    'status' => '500',
                    'result' => 'Subscriber ever inactivate'
                );
            } elseif($this->subscribe->setActive($subscriber['id_subscribe'],0)) {
                return array(
                    'status' => '200',
                    'result' => 'Subscriber inactivate'
                );
            } else {
                return array(
                    'status' => '500',
                    'result' => 'Error during subscriber inactivation'
                );
            }
        } else {
           return array(
                'status' => 404,
                'result' => 'No subscriber found to inactivate',
           );
        }
    }

    // }}}

    // {{{ execute()

    /** perform action and get result array
     *
     * @return array
     */
    public function execute() 
    {
        return $this->{$this->params->getAction()}();
    }

    // }}}

    // {{{ setDebug()

    /** debug
     *
     * @param string $key Key
     * @param string $value Value debug
     */
    public function setDebug($key,$value) 
    {
        if($this->debug) {
            echo $key.' : '.$value;
        }
    }

}

// response format and send
class HelloEvent_ResponseHandler {

    // {{{ sendResponse()

    /** response
     *
     */
    public function sendResponse($response,$format='json') {
        if($format=='json') {
            //header('Content-Type: application/json'); 
            echo json_encode($response);
        }
        exit;
    }

    // }}}

}

// user parameters
$HE_requestParams = new HelloEvent_RequestParams();

// response handler
$HE_responseHandler = new HelloEvent_ResponseHandler();

// check key
$HE_authKey = new HelloEvent_AuthKey($HE_requestParams);

if(!$HE_authKey->check()) {
    // send response and exit
    $HE_responseHandler->sendResponse(array(
        'status' => '401',
        'result' => 'Bad authorisation key'
    ));
}

// check subscriber code
if(!$HE_requestParams->codeExist()) {
    // send response and exit
    $HE_responseHandler->sendResponse(array(
        'status' => '404',
        'result' => 'Subscriber code unvalaible'
    ));
}

// helloevent
$HE_check = new HelloEvent_Check($HE_requestParams);

// method = action
if(method_exists($HE_check,$HE_requestParams->getAction())) {
    // perform action
    $HE_actionResult = $HE_check->execute();
    // send result and exit
    $HE_responseHandler->sendResponse($HE_actionResult);
} else {
    // no action =  reponse and exit
    $HE_responseHandler->sendResponse(array(
        'status' => '404',
        'result' => 'Action unvailable or not specified'
    ));
}   

?>
