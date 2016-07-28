<?php
/**
 * Created by IntelliJ IDEA.
 * User: wjr
 * Date: 16-6-15
 * Time: 下午1:56
 */

?>
<!--
<div id="orderInfo">
    <div class="ico_title">返回结果</div>
    <div class="form_wrap account">
        <div class="form_list">
            <span class="list_title">返回的结果：</span>
            <span class="list_val">
                <textarea id="result" style="height: 300px;" name="out_trade_no"><?php echo $_POST['jsonResult'] ?></textarea>
            </span>
        </div>
    </div>
</div>
-->
<div id="orderInfo">
    <div class="xt"></div>
    <div id="resp_info">
        <div class="result">
            <label>测试结果</label>
            <textarea name="MSG" cols=100 rows=12><?php echo $_POST['jsonResult'] ?></textarea>
            <span></span>
        </div>
    </div>
</div>
<!-- 测试结果显示结束-->