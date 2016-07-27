<?php

/**
 * Created by IntelliJ IDEA.
 * User: wjr
 * Date: 16-7-27
 * Time: 上午10:25
 */
class Props{
    private $cfg = array(
        'PAY_URL'=>'https://api.zwxpay.com/pay/unifiedorder',//提交订单URL
        'QUERY_URL'=>'https://api.zwxpay.com/pay/orderquery',//查询订单URL
        'REFUND_URL'=>'https://api.zwxpay.com/secapi/pay/refund',//退款URL
        'QUERY_REFUND_URL'=>'https://api.zwxpay.com/pay/refundquery',//查询退款URL
        'MCH_ID'=>'15121009',
        'SIGN_KEY'=>'0d8226a1fe3cd661308f9e71e8c859db'
    );

    public function K($cfgName){
        return $this->cfg[$cfgName];
    }
}