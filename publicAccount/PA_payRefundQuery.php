<?php
/**
 * Created by IntelliJ IDEA.
 * User: wjr
 * Date: 16-6-16
 * Time: 上午9:29
 */
?>
<div id="queryOrder">
    <div class="ico_title">支付测试(提交信息（公众帐号支付退款查询）)</div>
    <div class="form_wrap account">
        <div class="form_list">
            <span class="list_title">平台订单号：</span>
            <span class="list_val">
                <input name="transaction_id" value="" placeholder="">
            </span>
        </div>
        <div class="form_list">
            <span class="list_title">商户订单号：</span>
            <span class="list_val">
                <input name="out_trade_no" value="" placeholder="">
            </span>
        </div>
        <div class="form_list">
            <span class="list_title">商户退款单号：</span>
            <span class="list_val">
                <input name="out_refund_no" value="" placeholder="">
            </span>
        </div>
        <div class="form_list">
            <span class="list_title">平台退款单号：</span>
            <span class="list_val">
                <input name="refund_id" value="" placeholder="">
            </span>
        </div>
        <div class="form_list">
            <div style="margin-left: 30px;"><em>平台订单号/商户订单号/商户退款单号/平台退款单号四选一</em></div>
        </div>
        <div class="form_list">
            <span class="list_title"></span>
            <span class="list_val submit btn btn_blue">确定</span>
        </div>
    </div>
</div>