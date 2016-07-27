$(function(){
    var routeUrl = {
            'payTest':'PA_payTest',//订单提交页面
            'payQuery':'PA_payQuery',
            'payRefund':'PA_payRefund',
            'payRefundQuery': 'PA_payRefundQuery'
        },
        number = /^(\d?)/g,ip = /^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})/g,
        time = /^(\d{14})?/;
    //初始化加载的页面
    $('#form_info').loadHtml(routeUrl['payTest'] + '.php');

    $('div.menu li').bind('click',function(e){
        var curTarget = $(e.currentTarget), href = curTarget.attr('href'),suffix = href.substring(href.lastIndexOf('\.'));
        curTarget.addClass('checked').siblings('.checked').removeClass('checked');
        $('#form_info').loadHtml(routeUrl[href] + '.php',suffix);
        $('#resp_info').empty();
        return false;
    });
    $('.right').delegate('input[type=button]','click',function(e){
        console.log('invoked');
        var params = $('.form_wrap').serializeEl();
        var invokeMethod = $('ul li.checked').attr('href');
        params['method'] = invokeMethod;
        $.post('/libs/Handler.php',params,function(res){
            console.log(res);
            var postJ = {'jsonResult': res};
            $('#resp_info').loadHtml('PA_resp.php', postJ);
        });
    });
});