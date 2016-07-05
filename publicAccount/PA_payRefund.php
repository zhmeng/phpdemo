<?php
/**
 * Created by IntelliJ IDEA.
 * User: wjr
 * Date: 16-6-16
 * Time: 上午9:15
 */
?>
<div id="queryOrder">
    <div class="ico_title">支付测试(提交信息（公众和帐号支付申请退款查询）)</div>
    <div class="form_wrap account">
        <div class="form_list">
            <span class="list_title">平台订单号：</span>
            <span class="list_val">
                <input name="transaction_id" value="" placeholder="">
            </span><em>商户订单号/平台订单号二选一</em>
        </div>
        <div class="form_list">
            <span class="list_title">商户订单号：</span>
            <span class="list_val">
                <input name="out_trade_no" value="" placeholder="">
            </span><em>商户订单号/平台订单号二选一</em>
        </div>
        <div class="form_list">
            <span class="list_title">商户退款单号：</span>
            <span class="list_val">
                <input name="out_refund_no" value="" placeholder="">
            </span><em>商户退款单号</em>
        </div>
        <div class="form_list">
            <span class="list_title">订单总金额：</span>
            <span class="list_val">
                <input name="total_fee" value="" placeholder="">
            </span><em>订单总金额(分)</em>
        </div>
        <div class="form_list">
            <span class="list_title">退款总金额：</span>
            <span class="list_val">
                <input name="refund_fee" value="" placeholder="">
            </span><em>退款总金额(分)</em>
        </div>
        <div class="form_list">
            <span class="list_title"></span>
            <span class="list_val submit btn btn_blue">确定</span>
        </div>
    </div>
</div>
