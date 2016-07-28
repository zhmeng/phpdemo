<?php
/**
 * Created by IntelliJ IDEA.
 * User: wjr
 * Date: 16-6-16
 * Time: 上午9:15
 */
?>
<div class="content_title">
    <h2>退款测试</h2>
    <span>H5退款测试</span></div>
<div class="pe_order">
    <div class="pe_nuber">
        <label>平台订单号</label>
        <input name="transaction_id"placeholder="">商户订单号/平台订单号二选一
    </div>
    <div class="pe_nuber">
        <label>商户订单号</label>
        <input name="out_trade_no"placeholder="">商户订单号/平台订单号二选一
    </div>
    <div class="pe_nuber">
        <label>商户退款单号</label>
        <input name="out_refund_no" placeholder="">
    </div>
    <div class="pe_nuber">
        <label>订单总金额</label>
        <input name="total_fee" value="1" placeholder="">
        <span>*</span>&nbsp;&nbsp;&nbsp;订单总金额(分)
    </div>
    <div class="pe_nuber">
        <label>退款总金额</label>
        <input name="refund_fee" value="1" placeholder="">
        <span>*</span>&nbsp;&nbsp;&nbsp;退款总金额(分)
    </div>
    <input type="button" value="提交" class="button" />
</div>