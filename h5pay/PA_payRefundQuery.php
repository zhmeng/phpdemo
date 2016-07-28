<?php
/**
 * Created by IntelliJ IDEA.
 * User: wjr
 * Date: 16-6-16
 * Time: 上午9:15
 */
?>
<div class="content_title">
    <h2>退款查询测试</h2>
    <span>H5退款查询测试</span></div>
<div class="pe_order">
    <div class="pe_nuber">
        <label>平台订单号</label>
        <input name="transaction_id"　placeholder="">
    </div>
    <div class="pe_nuber">
        <label>商户订单号</label>
        <input name="out_trade_no" placeholder="">
    </div>
    <div class="pe_nuber">
        <label>商户退款单号</label>
        <input name="out_refund_no" placeholder="">
        <span>*</span>&nbsp;&nbsp;&nbsp;订单总金额(分)
    </div>
    <div class="pe_nuber">
        <label>平台退款单号</label>
        <input name="refund_id" placeholder="">
        <span>*</span>&nbsp;&nbsp;&nbsp;退款总金额(分)
    </div>
    <div style="margin-left: 100px;"><em>平台订单号/商户订单号/商户退款单号/平台退款单号四选一</em></div>
    <input type="button" value="提交" class="button" />
</div>