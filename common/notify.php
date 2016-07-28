<?php
/**
 * Created by IntelliJ IDEA.
 * User: wjr
 * Date: 16-7-28
 * Time: 上午10:03
 * 通知回调　URL
 */

require('../libs/Utils.class.php');
require('../libs/Log.php');

function isRightSign(array $ary) {
    $signPars = "";
    ksort($ary);
    foreach($ary as $k => $v) {
        if("sign" != $k && "" != $v) {
            $signPars .= $k . "=" . $v . "&";
        }
    }
    $signPars .= "key=" . $this->getKey();

    $sign = strtolower(md5($signPars));

    $signOrigin  = strtolower($ary["sign"]);

    return $sign == $signOrigin;

}
function notify() {
    $response = [];// 响应微信的数据结构
    // 采用以下方式替换weiixn的方式
    $xml = file_get_contents("php://input");

    sysdebug($xml);

    if (empty($xml)) {
        $response = [
            'return_code'   => 'FAIL',
            'return_msg'    => '未获取到微信的数据',
        ];
        return Utils::to($response);
    }
    // 格式化数据为数组
    $data = Utils::parse($xml);
    if ($data === false) {
        $response = [
            'return_code'   => 'FAIL',
            'return_msg'    => '解析数据错误',
        ];
        return Utils::to($response);
    }
    // 检查是否完成支付
    if ($data['result_code'] !== 'SUCCESS' || $data['return_code'] !== 'SUCCESS') {
        $response = [
            'return_code'   => 'FAIL',
            'return_msg'    => '尚未支付',
        ];
        return Utils::to($response);
    }
    // 验证返回的结果签名
    if (! isRightSign($data)) {
        $response = [
            'return_code'   => 'FAIL',
            'return_msg'    => '签名错误',
        ];
        return Utils::to($response);
    }else {
        $response = [
            'return_code'   => 'SUCCESS',
            'return_msg'    => 'OK',
        ];
        return Utils::to($response);
    }
}
echo notify();