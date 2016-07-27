/**
 * Created by wjr on 16-7-26.
 */
(function($){
    $.fn.loadHtml = function(url,d){
        var self = this;
        d = d || {};
        this.empty().load(url, d, function(tpl, status, obj){
            self.html(tpl);
        });
    };

    $.fn.serializeEl = function(){
        var param = {};
        var input = this.find('input,select');
        input.each(function(i,item){
            item = $(item);
            var vType = item.attr('vtype'), ind = 0;
            param[item.attr('name')] = item.val();
        });
        delete param['undefined'];
        return param;
    };
})(jQuery);
