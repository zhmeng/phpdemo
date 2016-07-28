<?php
/**
 * Created by IntelliJ IDEA.
 * User: wjr
 * Date: 16-7-28
 * Time: 上午10:43
 */

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>结果查询</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="../js/jquery-2.1.0.min.js"></script>
    </head>
    <body>
        <div id="result"></div>
    </body>
    <script>
        $(function(){
            var params = {'out_trade_no': "<?php echo $_GET['orderNum'] ?>"};
            params['method'] = 'payQuery';
            $.post('/libs/Handler.php',params,function(res){
                $('#result').text(res);
            });
        });
    </script>
</html>