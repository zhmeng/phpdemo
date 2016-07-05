/**
 * Created by wjr on 16-6-14.
 */
(function(win,$,h){
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
            return param;
        };
        var PopUpWin = function(ele,opts){
            opts = $.extend({
                id:'',
                content:undefined,//内容
                closeCallback:undefined,//关闭时调用的方法
                openCallback:undefined,//打开窗口回调方法
            },opts);
            this.init(ele,opts);
        };

        PopUpWin.prototype = {
            template:'<div class="pop-wraper" id="{id}">\
                <div class="pop-mask"></div>\
                <div class="pop-outer">\
                    <div class="pop-inner">\
                        <div class="pop-content">\
                            {content}\
                        </div>\
                        <div class="btn btn_cancel"><i class="ico_cancel"></i></div>\
                    </div>\
                </div>\
            </div>',
            init:function(ele,opts){
                this.render(ele,opts);
                this.initEvent(ele,opts);
            },
            initEvent:function(ele,opts){
                var self = this;
                ele.find('.btn_cancel').click(function(){
                    ele.find('#'+self.id).remove();
                    if(opts.closeCallback !== undefined && $.isFunction(opts.closeCallback)){
                        opts.closeCallback();
                    }
                });
            },
            elId:function(){//自动生成7位8进制DOM元素ID
                return 'win-xxx'.replace(/[x]/g,function(c){
                    var r = Math.random() * 16|0, v = c === 'x' ? r : (r&0x3|0x8);
                    return v.toString(8);
                }).toLocaleLowerCase();
            },
            render:function(ele,opts){
                if(ele === undefined){
                    ele = $('body');
                }

                var content = opts.content;
                this.id = this.elId();

                if($.isFunction(content)){
                    content  = content(this);
                }
                tpl = this.template.replace(/\{id\}/,this.id).replace(/\{content\}/,content);
                ele.append(tpl);
                if(opts.openCallback && $.isFunction(opts.openCallback)){
                    opts.openCallback.call(this);
                }
            }
        };

        $.fn.popUpWin = function(opts){
            return this.each(function(){
                var that = $(this);
                var popUp = new PopUpWin(that,opts);
            });
        };

    })(jQuery);
})(window,jQuery);