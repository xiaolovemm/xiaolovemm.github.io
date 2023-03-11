// JavaScript Document
$(document).ready(function(){  	
var num=$(".ppic li").length;//获取焦点图的个数
var fwidth=$(".ppic li").width();//获取每个焦点图的宽度
var sec=4000;//时间切换间隔
 
var btn = '<ul class="btn"><li class="on">1</li>';
var btnend = '</ul>';
for(i=2;i<=num;i++){btn += '<li>'+i+'</li>';};
btn += btnend;
if(num == 1){btn = null};
$("#lunbo").append(btn);//自动根据焦点图个数，添加切换按钮，如果只有一张图片则不显示切换按钮。
 
$(".ppic").css("width",fwidth*num);//设定大图集合的宽度，也就是所有焦点图宽度的和。
 
$(".btn li").bind("mouseover",function(){
  $(this).addClass("on").siblings().removeClass("on");
  var i=$(".btn li").index(this);var marginL=fwidth*i;
  $(".ppic").animate({"left":-marginL},500);}
);//鼠标指向按钮，焦点图切换到对应位置，按钮样式改变。mouseover是鼠标经过时，这里也可以改成click，通过点击切换焦点图。
 
picTimer = setInterval(timeset,sec); //指定sec毫秒后执行一次timeset函数。
function timeset(){
  var j = $(".btn li").index($(".on"));//取得 当前焦点图的位置，即class为on的序号。
  var timew = fwidth*(j+1);
  if(j == num-1){$(".btn li").eq(0).addClass("on").siblings().removeClass("on");$(".ppic").animate({"left":0},500);}
            else{$(".btn li").eq(j+1).addClass("on").siblings().removeClass("on");$(".ppic").animate({"left":-timew},500);};
                  };
 
$("#lunbo").mouseover(function(){clearInterval(picTimer);});
$("#lunbo").bind("mouseout",function(){picTimer = setInterval(timeset,sec);}
);//当鼠标指向焦点图或者是切换按钮时，定时器清除，即不在执行自动切换，鼠标离开则恢复自动切换。
 
});
