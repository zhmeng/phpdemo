<?php
require("../libs/Log.php");
/**
 * Created by IntelliJ IDEA.
 * User: wjr
 * Date: 16-6-14
 * Time: 下午3:11
 */
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="UTF-8">
    <title>梓微兴Web扫码支付测试页面</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="../js/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="../js/libs.js"></script>
    <script type="text/javascript" src="../js/publicAccount.js"></script>
</head>
<body>
<div class="top">
    <div class="logo"></div>
</div>
<div class="main menu">
    <div class="left">
        <ul>
            <li class="checked" href="payTest">支付测试</li>
            <li href="payQuery">订单查询测试</li>
            <li href="payRefund">退款测试</li>
            <li href="payRefundQuery">退款查询测试</li>
        </ul>
    </div>
    <div class="right">
        <div id="form_info" class="form_wrap">
        </div>
        <div id="resp_info">

        </div>
    </div>
</div>
<div class="bottom">客服电话：(0755) 23991203<br>
    Copyright © 2016 ZI WEI XING Technology. All Rights Reserved</div>
</body>
</html>
