<div id="orderInfo">
    <div class="ico_title">支付测试(提交信息（公众帐号支付）)</div>
    <div class="form_wrap account">
        <div class="form_list">
            <span class="list_title">商户订单号：</span>
            <span class="list_val">
                <input name="out_trade_no" value="<?php echo time() ?>" maxlength="32" size="32" placeholder="">
            </span>
            <i>*</i><em>32个字符内,可包含字母</em>
        </div>
        <div class="form_list">
            <span class="list_title">商品描述：</span>
            <span class="list_val">
                <input name="body" value="测试购买商品" maxlength="64" size="64" placeholder="">
            </span>
            <i>*</i><em>对商品的简单描述,32个字符以内</em>
        </div>
        <div class="form_list">
            <span class="list_title">附加信息：</span>
            <span class="list_val">
                <input name="attach" value="附加信息" maxlength="127" size="127" placeholde="">
            </span>
        </div>
        <div class="form_list">
            <span class="list_title">总金额：</span>
            <span class="list_val">
                <input name="total_fee" value="1" placeholder="单位：分">
            </span>
            <i>*</i><em>单位：分 整型</em>
        </div>
        <div class="form_list">
            <span class="list_title">终端IP：</span>
            <span class="list_val">
                <input name="spbill_create_ip" vtype="ip" value="127.0.0.1" disabled>
            </span>
        </div>
        <div class="form_list">
            <span class="list_title"></span>
            <span class="list_val submit btn btn_blue">确定</span>
        </div>
    </div>
</div>