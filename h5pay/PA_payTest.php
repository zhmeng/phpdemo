<?php
$orderNum=time()
?>
<div class="content_title">
    <h2>支付测试</h2>
    <span>H5支付测试</span></div>
<div class="pe_order">
    <div class="pe_nuber">
        <label>商户订单号</label>
        <input name="out_trade_no" value="<?php echo $orderNum ?>" placeholder="">
    </div>
    <div class="pe_nuber">
        <label>商品描述</label>
        <input name="body" value="商品测试" placeholder="">
    </div>
    <div class="pe_nuber">
        <label>测试金额</label>
        <input name="total_fee" value="1" placeholder="">
        <span>*</span>&nbsp;&nbsp;&nbsp;单位：分  整型
    </div>
    <div class="pe_nuber">
        <label>终端IP</label>
        <input name="spbill_create_ip" value="127.0.0.1" placeholder="">
        <span>*</span>&nbsp;&nbsp;&nbsp;长度16
    </div>
    <div class="pe_nuber">
        <label>跳转地址</label>
        <input name="return_url" value="<?php echo 'http://'.$_SERVER['HTTP_HOST']."/common/return.php?orderNum=".$orderNum ?>" placeholder="">
        <span>*</span>&nbsp;&nbsp;&nbsp;跳转页面可以附带订单号，用于跳转页面的查询操作
    </div>
    <div class="pe_nuber">
        <label>交易类型</label>
        <input name="trade_type" value="trade.weixin.h5pay">
        <span>*</span>&nbsp;&nbsp;&nbsp;长度16
    </div>
    <input type="button" value="提交" class="button" />
</div>