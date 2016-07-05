<?php
class Config{
    private $cfg = array(
        'payUrl'=>'https://api.zwxpay.com/pay/unifiedorder',//提交订单URL
        'queryUrl'=>'https://api.zwxpay.com/pay/orderquery',//查询订单URL
        'refundUrl'=>'https://api.zwxpay.com/secapi/pay/refund',//退款URL
        'queryRefundUrl'=>'https://api.zwxpay.com/pay/refundquery',//查询退款URL
        'mchId'=>'15121009',
        'key'=>'0d8226a1fe3cd661308f9e71e8c859db'
       );
    
    public function C($cfgName){
        return $this->cfg[$cfgName];
    }
}
?>