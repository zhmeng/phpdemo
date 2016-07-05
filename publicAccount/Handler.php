<?php
//namespace publicAccount;
/**
 * Created by IntelliJ IDEA.
 * User: wjr
 * Date: 16-6-14
 * Time: 下午4:21
 */
require('../Utils.class.php');
require('../config/config.php');
require('../class/RequestHandler.class.php');
require('../class/ClientResponseHandler.class.php');
require('../class/PayHttpClient.class.php');
require('./log.php');

class Handler {
    private $resHandler = null;
    private $reqHandler = null;
    private $pay = null;
    private $cfg = null;
    private $url = null;

    public function __construct(){
        $this->Request();
    }

    public function Request(){
        $this->resHandler = new ClientResponseHandler();
        $this->reqHandler = new RequestHandler();
        $this->pay = new PayHttpClient();
        $this->cfg = new Config();

        $this->reqHandler->setKey($this->cfg->C('key'));
    }

    public function preHandler(){
        $this->reqHandler->setReqParams($_POST,array('method'));
        $this->reqHandler->setParameter('mch_id',$this->cfg->C('mchId'));//必填项，商户号，由梓微兴分配
        $this->reqHandler->setParameter('nonce_str',mt_rand(time(),time()+rand()));//随机字符串，必填项，不长于 32 位
    }

    public function afterHandler(){
        if($this->url == null){
            echo json_encode(array('status'=>500,'msg'=> '没有设置url'));
            exit();
        }
        $this->reqHandler->createSign();
        sysdebug($this->reqHandler->getAllParameters());
        $data = Utils::toXml($this->reqHandler->getAllParameters());
        //var_dump($data);
        $this->pay->setReqContent($this->url,$data);
        if($this->pay->call()){
            sysdebug($this->pay->getResContent());
            $xml = new SimpleXMLElement($this->pay->getResContent());
            echo $xml->asXML();
        }else{
            echo json_encode(array('status'=>500,'msg'=>'Response Code:'.$this->pay->getResponseCode().' Error Info:'.$this->pay->getErrInfo()));
        }
    }

    public function index(){
        $method = isset($_REQUEST['method'])?$_REQUEST['method']:'notFound';
        $this->preHandler();
        call_user_func(array('Handler',$method));
        $this->afterHandler();
    }
    public function notFound(){
        sysdebug('notFound');
    }
    public function payTest(){
        $notify_url = 'http://'.$_SERVER['HTTP_HOST'];
        $this->reqHandler->setParameter('notify_url',$notify_url.'/payInterface/request.php?method=callback');
        $this->reqHandler->setParameter('trade_type', 'trade.weixin.jspay');
        $this->reqHandler->setParameter('return_url', 'http://zhangmeng.test.szjyyg.cn/');
        $this->url = $this->cfg->C('payUrl');
    }
    public function payQuery(){
        $this->url = $this->cfg->C('queryUrl');
        $this->reqHandler->setParameter('out_trade_no', $_POST['out_trade_no']);
        sysdebug('payQuery');
    }

    public function payRefund(){
        $this->url = $this->cfg->C('refundUrl');
    }

    public function payRefundQuery(){
        $this->url = $this->cfg->C('queryRefundUrl');
    }
}
sysdebug("main index..");
$handler = new Handler();
$handler->index();