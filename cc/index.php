
<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>野</title>
		<style type="text/css">
* {
	margin: 0;
	padding: 0;
}
li {
	list-style: none;
}
a {
	text-decoration: none;
	color: #000;
	-webkit-tap-highlight-color: rgba(255,0,0,0);
}
.a {
	width: 100%;
	height: auto;
	position: relative;
}
/* 导航条 */
.dht {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 79px;
	border-bottom: 1px solid #4d9fc4;
}
.zdht {
	margin: 0 auto;
	width: 1200px;
	height: 100%;
}
.zdht>ul {
	width: 100%;
	display: flex;
	justify-content: space-between;
}
.zdht>ul>li {
	height: 100%;
	width: auto;
	line-height: 79px;
	margin-left: 30px;
	margin-right: 30px;
	transition: 0.2s;
	overflow: hidden;
}
.zdht>ul>li:hover {
	background-color: #dd6a0c;
}
.zdht>ul>li:hover>a {
	color: #fff;
}
.zdht>ul>li>a {
	display: block;
	width: 100%;
	padding-left: 25px;
	padding-right: 25px;
	color: #eeeeee;
}
.lbt {
	width: 100%;
	height: auto;
	position: relative;
	z-index: -1;
}
.lbt-bj {
	width: 100%;
	height: auto;
}
.lbt-yd {
	position: absolute;
	display: flex;
	justify-content: space-between;
	width: 200px;
	bottom: 35px;
	left: 50%;
	margin-left: -100px;
}
.lbt-yd>li {
	display: block;
	width: 20px;
	height: 20px;
	background-color: #f17815;
	border-radius: 50%;
}
#dy-3 {
	background-color: #fff;
}
.aa { width:700px; height:380px; margin:0 auto}
.aa div { width:40px; height:30px; border:3px #F00 solid; float:left; margin-left:2px; position:relative; top:265px; left:100px; text-align:center; font-size:10px; padding-top:8px; font-weight:bold; color:#0FF}

.box {
	width: 100%;
	height: auto;
	margin-bottom: 50px;
	margin-top: 30px;
}
.zbox {
	width: 1200px;
	height: auto;
	margin: 0 auto 45px;
}





.box-bt {
	width: 100%;
	height: auto;
	margin-bottom: 30px;
}
.box-bt>p {
	text-align: center;
	margin-bottom: 10px;
}
.zwbt {
	font-size: 22px;
}
.ywbt {
	font-size: 22px;
	letter-spacing: 1px;
	color: #F17815;
}
.bthx {
	width: 30px;
	height: 2px;
	background-color: #f17815;
	margin: 0 auto;
}

.box-nr {
	width: 1200px;
	height: auto;
	margin: 0 auto;
	display: flex;
	justify-content: space-between;
}
.nrtp-a {
	display: block;
}
.nrtp-b {
	height: 590px;
}
.nrtp-b1 {
	width: 590px;
	height: auto;
	display: flex;
	justify-content: space-between;
	margin-bottom: 20px;
	height: 290px;
}
.nrtp-b1-1 {
	width: 255px;
	height: 100%;
	background-color: #f17815;
	padding-left: 15px;
	padding-right: 15px;
	color: #fff;
}
.nrtp-b1-1>h3 {
	margin-top: 50px;
	margin-bottom: 10px;
	font-weight: normal;
	font-size: 24px;
}
.nrtp-b1-1>p {
	font-size: 14px;
	line-height: 25px;
}
.nrtp-b1-1>a {
	display: block;
	width: 89px;
	height: 34px;
	line-height: 34px;
	color: #fff;
	text-align: center;
	border: 1px solid #fff;
	background: #f17815;
	transition: 0.3s;
	margin: 60px auto 0;
}
.nrtp-b1-1>a:hover {
	background-color: #d26811;
}
.nrtp-b1-2 {
	display: block;
}
.nrtp-b2 {
	height: 290px;
	width: 590px;
}

.box-nr2 {
	width: 1200px;
	height: auto;
	margin: 0 auto;
}
.box-nra,.box-nrb {
	width: 100%;
	height: auto;
	display: flex;
	justify-content: space-between;
}
.box-nra {
	margin-bottom: 30px;
}
.box-nra>img,.box-nrb>img {
	width: 590px;
	height: auto;
}
.nra-2,.nrb-1 {
	width: 590px;
	height: 374.73px;
	
	position: relative;
}
.nra-2>a,.nrb-1>a {
	width: 210px;
	height: 60px;
	background-color: #f17815;
	position: absolute;
	text-align: center;
	line-height: 60px;
	font-size: 22px;
	color: #fff;
	transition: 0.3s;
}
.nra-2>a:hover,.nrb-1>a:hover {
	background-color: #d7630a;
}
.nra-2>a {
	bottom: 0;
	right: 0;
}
.nrb-1>a {
	bottom: 0;
	left: 0;
}
.nra-2>h3,.nrb-1>h3 {
	margin-top: 60px;
	margin-bottom: 20px;
	font-size: 26px;
	font-weight: normal;
	color: #333333;
}
.nra-2>p,.nrb-1>p {
	font-size: 16px;
	color: #999999;
	line-height: 25px;
}
.box-nr3 {
	width: 1200px;
	height: auto;
	margin: 0 auto 30px;
}
.gnjd {
	display: block;
	
}
.box-nr3>div {
	display: flex;
	justify-content: space-between;
	width: 100%;
	height: auto;
}
.nr3-a {
	margin-bottom: 30px;
}
.gnjd>b {
	color: #f17815;
	font-size: 20px;
}
.gnjd>h4 {
	font-size: 22px;
	font-weight: normal;
	color: #333333;
	margin-bottom: 7px;
	margin-top: 7px;
}
.gnjd>p {
	font-size: 12px;
	color: #999999;
	margin-bottom: 7px;
}
.nr3-more {
	display: block;
	width: 87px;
	height: 32px;
	background-color: transparent;
	color: #000;
	margin: 0 auto;
	text-align: center;
	line-height: 34px;
	border: 1.5px solid #000;
	transition: all 0.3s;
}


.nr3-more:hover {
	
	color: #fff;
	background-color: #161823;
}

.db {
	width: 100%;
	height: auto;
	background-color: #000000;
	overflow: overlay;
	font-size: 15px;
	color: #dcdcdc;
}
.db-1 {
	width: 100%;
	height: auto;
	margin-top: 45px;
	margin-bottom: 30px;
	text-align: center;
}
.db-1>a {
	margin-left: 37.5px;
	margin-right: 37.5px;
	color: #dcdcdc;
	transition: 0.2s;
}
.db-1>a:hover {
	color: #fff;
}
.db>p {
	color: #dcdcdc;
	text-align: center;
	margin-bottom: 7px;
}
.db>p>a {
	color: #dcdcdc;
	transition: 0.2s;
}
.db>p>a:hover {
	color: #fff;
}
.db>p>span {
	margin-left: 15px;
	margin-right: 15px;
}
.lxfs {
	margin-bottom: 30px !important;
}
.a .lbt .lbt-yd .aa .ss {
	font-size: 30px;
	color: #0FF;
	position: absolute;
	top: 268px;
	left: -100px;
}
#main {text-align:center;}
#ad {width:150px; height:200px; position:absolute; top:250px; left:0px; z-index:2;}
#close { width:13px; height:13px; position:absolute; top:248px; left:130px; z-index:3; cursor:pointer;}
#lunbo ul {
	list-style-type: none;
}
#lunbo .ppic {
	padding: 0px;
	position: absolute;
	z-index: 4;
}
#lunbo {
	height: 290px;
	width: 590px;
	margin-top: 10px;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: auto;
	overflow: hidden;
	position: relative;
	z-index: 20;
}
#lunbo .ppic li {
	padding: 0px;
	float: left;
	width: 588px;
}
#lunbo .btn {
	height: 30px;
	margin-left: -100px;
	overflow: hidden;
	position: absolute;
	z-index: 25;
	right: 0px;
	bottom: 3px;
}
#lunbo .btn li {
	line-height: 12px;
	background-color: #FFF;
	text-align: center;
	padding: 5px;
	float: left;
	height: 12px;
	width: 12px;
	margin-top: 0px;
	margin-right: 10px;
	margin-bottom: 10px;
	margin-left: 0px;
	border: 1px solid #036;
	overflow: hidden;
	cursor: pointer;
	border-radius:12px;
	opacity:0.2px;
}
#lunbo.btnli.on {
	color: #FFFFFF;
	background-color: #0CC;
}
 .kefu_q1 ul li:first-child,
.kefu_q1 ul li a.animate{ background: url(../img//q1.png) no-repeat; }
.kefu_q1{ position: fixed;z-index: 1001; }
.kefu_q1 ul li{
	position: relative;
	width: 45px;
	height: 45px;
	background: #1b1b1d;
	margin-bottom: 1px;
	background-color: #000000;
}
.kefu_q1 ul li:first-child{height: 50px;font-family: "Arial";background-position: 0 0;color: #fff;cursor: pointer;}
.kefu_q1 ul li a.animate{
	position: absolute;
	left: 2px;
	width: auto;
	height: 45px;
	line-height: 45px;
	color: transparent;
	top: -2px;
}
.kefu_q1 ul li a.animate,
.kefu_q1 ul li.q1_code span{-webkit-transition:all 0.2s ease-in;-moz-transition:all 0.2s ease-in;-ms-transition:all 0.2s ease-in;transition:all 0.2s ease-in;}
.kefu_q1 ul li.q1_code span p{width: 135px;text-align: center;font-size: 12px; line-height: 15px;background: #fff;}
.kefu_q1 ul li.q1_qq a,
.kefu_q1 ul li.q1_zx a{width: 200px;padding-left: 46px;}
.kefu_q1 ul li.q1_qq a{background-position: 0 -50px;}
.kefu_q1 ul li.q1_tel a{
	width: 200px;
	padding-left: 46px;
	background-position: 0 -96px;
}
.kefu_q1 ul li.q1_zx a{background-position: 0 -142px;}
.kefu_q1 ul li.q1_code{cursor:pointer;background:#1b1b1d url(../img/q1.png) no-repeat 0 -188px;}
.kefu_q1 ul li.q1_code span{position: absolute;top: -115px;left: -147px;display: inline-block;width: 140px;height: 165px;display: none;background:#fff;border: 1px solid #eee;}
.kefu_q1 ul li.q1_code img{width: 133px;height: 133px;padding: 4px;}
.kefu_q1 ul li:first-child:hover{background-position: -55px 0;}
.kefu_q1 ul li.q1_qq:hover a,
.kefu_q1 ul li.q1_zx:hover a,
.kefu_q1 ul li.q1_tel:hover a{background: #dd001a url(../img/q1.png) no-repeat;}
.kefu_q1 ul li.q1_qq:hover a{color: #fff;left: -100px;background-position: 0 -50px;}
.kefu_q1 ul li.q1_zx:hover a{color: #fff;left: -100px;background-position: 0 -142px;}
.kefu_q1 ul li.q1_tel:hover a{width: 200px;padding-left: 57px;color: #fff;left: -100px;background-position: 10px -96px;}
.kefu_q1 ul li.q1_code:hover span{display: block;}

.kefu_q2,span.close{position: fixed;text-align: center;z-index: 1001;}
.kefu_q2{font-family: 'Arial';font-size: 14px;width:110px;height: 370px;}
.kefu_q2 ul li{background: url(../img/q2_1.png) no-repeat 0 0;}
.kefu_q2 ul li:first-child{height: 113px;}
.kefu_q2 ul li b.b1{padding-top: 18px;padding-bottom:6px;display: block;}
.kefu_q2 ul li:nth-of-type(2){font-weight: bold;height: 80px;line-height: 110px;color: #fff;background-position: 0 -114px;}
.kefu_q2 ul li:nth-of-type(3){height: 135px;background-position: 0 -194px;}
.kefu_q2 ul li:nth-of-type(3) b.b3{display: block;padding-top: 9px;}
.kefu_q2 ul li img{width: 92px;height: 92px;padding-top: 10px;}
.kefu_q2 ul li.q2_top{cursor: pointer;height: 40px;background-position: 0 -329px;position: relative;}
.kefu_q2 ul li.q2_top a{position: absolute; display: block;width: 16px;height: 16px;top: 14px;}
.kefu_q2 ul li.q2_top a.get_top{left: 36px;}
.kefu_q2 ul li.q2_top a.close-2{left: 64px;}
span.close{right: -120%; display: block;width: 29px;height: 84px;background: url(../img/q2_1.png) no-repeat -271px 0;cursor: pointer;}
.kefu_q2 ul li,
.kefu_q2 ul li a{-webkit-transition:all .2s ease-in;-moz-transition:all .2s ease-in;-ms-transition:all .2s ease-in;transition:all .2s ease-in;}
.kefu_q2 ul li:first-child:hover{background-position:-130px 0;}
.kefu_q2 ul li:first-child:hover b,
.kefu_q2 ul li:nth-of-type(3):hover b,
.kefu_q2 ul li:first-child:hover a{color: #fff;}
.kefu_q2 ul li:nth-of-type(2):hover{background-position:-130px -114px;}
.kefu_q2 ul li:nth-of-type(3):hover{background-position:-130px -194px;}

.kefu_q3{position: fixed;text-align: center;z-index: 1001;}
.kefu_q3 .default {position: absolute;cursor: pointer;width: 45px;height: 131px;background: url(../img/q3.png) no-repeat 0 0;}
.default-hide{ margin-right: -120%}
.kefu_q3 .ico-bg{background: url(../img/q3.png) no-repeat;}
.kefu_q3 .top-1{width: 112px;height: 36px;background-position:-61px 0;}
.kefu_q3 .top-1 span.colse{float: right;display: block;width: 25px;height: 25px;cursor: pointer;margin-right: 8px;}
.kefu_q3 .bor-ul{background: #fff;border: 1px solid #f0f0f0;border-width: 0 1px;}
.kefu_q3 .bor-ul span.qq-tx{display: block;width: 67px;height:67px;margin: 0 auto;background-position:-61px -63px;}
.kefu_q3 .bor-ul span.qq-tx:hover{background-position: -153px -63px;}
.kefu_q3 .bor-ul p{padding-top: 10px;padding-bottom: 10px;color: #1e488a;font-weight: bold;border-bottom: 1px solid #f0f0f0;}
.kefu_q3 .bor-ul li{height: 42px;line-height: 42px;text-align: center;border-bottom: 1px solid #f0f0f0;background-position: 19px -210px;padding-left: 7px;}
.kefu_q3 .bor-ul .em{position: relative;width: 54px;height: 50px;border-right: 1px solid #f0f0f0;}
.kefu_q3 .bor-ul .em i.ico-code{display: block;width: 22px;height: 22px;background-position: -186px -14px;margin: 14px;cursor: pointer;}
.kefu_q3 .bor-ul .em i.ico-code:hover{background-position: -222px -14px;}
.kefu_q3 .bor-ul .get-top i.get-ico-code:hover{background-position:-45px -149px;}
.kefu_q3 .bor-ul .get-top{width: 55px;height: 50px;}
.kefu_q3 .bor-ul .get-top i.get-ico-code{display: block;width: 28px;height: 28px;margin: 14px;cursor: pointer;background-position:0 -149px;}
.kefu_q3 .bottom-1{width: 100%;height: 8px;background-position:0 -292px;}
.kefu_q3 .show-em{display: none;position: absolute;left: -121px;top: -78px;width: 117px;height: 163px;background-position:-133px -163px;}
.kefu_q3 .show-em img{width: 92px;height: 92px;margin: 9px 8px 0px 0px;}
.kefu_q3 .em:hover .show-em{display: block;}

.layer-qq{animation:layerqq .7s ease-out;position: fixed;left:50%;top: 50%;color:#fff;width:480px;height:282px;text-align: center; z-index: 1001;overflow: hidden;}
.layer-kefysys{width:95%;position:absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);-webkit-transform: translate(-50%,-50%);}
.layer-qq h3{font-size: 42px;text-transform: uppercase;font-weight: bold;}
.layer-qq strong{font-size: 22px;}
.layer-qq a.linkqq{display:block;width:138px;height:38px;line-height:38px;border:1px solid rgba(255,255,255,.5);text-align:center;font-size:14px;
	border-radius: 45px;color:#fff;margin:25px auto 0;}
.layer-qq a.qq-close{display: block;width: 28px;height: 28px;position: absolute;top: 20px;right: 20px;background: url(../img/QQclose.png) no-repeat;
	cursor: pointer;
}
 
a:hover img{filter:alpha(opacity=50);-moz-opacity:.5;-khtml-opacity:.5;opacity:.5}
#main .zbox .box-nr .nrtp-b .nrtp-b1 .nrtp-b1-1 #nr1-more:hover{background-color:#09F
</style>
	</head>
	<body>
		<div class="a">
			
			<div class="dht">
				<div class="zdht">
					<ul>
						<li>
							<a href="#" id="dht-sy">首页</a>
						</li>
						<li>
                        <a href="#" id="dht-sy">电影</a>
                        </li>
						<li>
							<a href="#">商城</a>
						</li>
						<li>
							<a href="#">投稿</a>
						</li>
						<li>
							<a href="#">产品</a>
						</li>
						<li>
							<a href="#">攻略</a>
						</li>
						<li>
							<a href="dl.php">个人中心</a>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="lbt">
				<img class="lbt-bj" src="img/9.jpg">
				<ul class="lbt-yd">
					<div class="aa">
                    <p class="ss">距离秒杀时间：</p>
                  <div id="b"></div>
                  <div id="c"></div>
                   <div id="d"></div>
                   <div id="e"></div>
                         </div>
				</ul>
			</div>
			
		</div>
		
		<div class="box">
			<div id="ad"><img src="img/11.jpeg" width="150" height="200" /></div>
<div id="close"><img src="img/close(1).jpg" width="20" height="20" /></div>
<div id="main">
			<div class="zbox">
				<div class="box-bt">
					<p class="zwbt">电影</p>
					<p class="ywbt">进入</p>
					<div class="bthx"></div>
				</div>
				<div class="box-nr">
					<img class="nrtp-a" src="img/2.jpg">
                   
					<div class="nrtp-b">
						<div class="nrtp-b1">
							<div class="nrtp-b1-1">
								<h3>商城</h3>
								<p id="nr1-p">商城</p>
								<a id="nr1-more" href="#">进入</a>
							</div>
							<img class="nrtp-b1-2" src="img/10.jpg">
						</div>
                       <div id="lunbo">
<ul class="ppic">
<li><img src="img/4.jpg" width="590" height="290"/></li>
<li><img src="img/3.jpg" width="590" height="290"/></li>
<li><img src="img/5.jpg" width="590" height="290"/></li>
</ul>
					</div>
				</div>
			</div>
			
			<div class="zbox">
				<div class="box-bt">
					<p class="zwbt">投稿</p>
					<p class="ywbt">请投稿</p>
					<div class="bthx"></div>
				</div>
				<div class="box-nr2">
					<div class="box-nra">
                    
						<a href="#"><img src="img/6.jpg" class="img"></a>
						<div class="nra-2">
							<h3>心情栏</h3>
							<p>不乱于心 不困于情 不畏将来 不念过往</p>
							<a href="#">投稿</a>
						</div>
					</div>
					<div class="box-nrb">
						<div class="nrb-1">
							<h3>爱情栏</h3>
							<p>
								熬过无人问津的日子，
必有诗和远方
							</p>
							<a href="#">投稿</a>
						</div>
                       
						<a href=""><img src="img/7.jpg" class="img"></a>
                        
					</div>
				</div>
			</div>
			
			<div class="zbox">
				<div class="box-bt">
					<p class="zwbt"></p>
					<p class="ywbt">产品</p>
					<div class="bthx"></div>
				</div>
				<div class="box-nr3">
					<div class="nr3-a">
						<a href="#" class="gnjd">
							<img src="img/8.jpg">
							<h4>兰博基尼</h4>
							<p>F8</p>
							<b>¥1780000</b>
						</a>
						<a href="#" class="gnjd">
							<img src="img/1.jpg">
							<h4>法拉利</h4>
							<p>E1</p>
							<b>¥6000000</b>
						</a>
						<a href="#" class="gnjd">
							<img src="img/8.jpg">
							<h4>兰博基尼</h4>
							<p>F8</p>
							<b>¥1780000</b>
						</a>
					</div>
					<div class="nr3-b">
						<a href="#" class="gnjd">
							<img src="img/8.jpg">
							<h4>兰博基尼</h4>
							<p>F8</p>
							<b>¥1780000</b>
						</a>
						<a href="#" class="gnjd">
							<img src="img/1.jpg">
							<h4>法拉利</h4>
							<p>E1</p>
							<b>¥6000000</b>
						</a>
						<a href="#" class="gnjd">
							<img src="img/8.jpg">
							<h4>兰博基尼</h4>
							<p>F8</p>
							<b>¥1780000</b>
						</a>
					</div>
				</div>
				<a class="nr3-more" href="#">更多</a>
			</div>
		</div>
  
      
     
    </div>
    <div class="kefu_q1" style="right:5px;bottom:20px;">
			<ul>
				<li class="q1_top" id="get_top" name="get_top"><a href="index.html"></a></li>
				<li class="q1_qq"><a class="animate block" target="_blank" href='#'>QQ</a></li>
				<li class="q1_tel">
				  <a class="animate block">10086</a>
				</li>
				<li class="q1_zx">
					<a class="animate block" href="#"> 在线客服</a>
				</li>
                
				<li class="q1_code">
					<span><img src="file:///D|/网站/影视/public/static/uploads/20190710/bd8a27770965735dfee7be35fa824008.png" alt="扫描二维码，关注我们" width="133" height="133" />
				    <p>扫描二维码，关注我们</p>
				    </span>
				</li>
			</ul>
		</div>
		
		<div class="db">
			<div class="db-1">
				<a href="#" id="db-sy">首页</a>
				<a href="#">电影</a>
				<a href="#">商城</a>
				<a href="#">投稿</a>
				<a href="#">产品</a>
				<a href="#">时尚</a>
				<a href="#">个人中心</a>
			</div>
			<p>野漫</p>
			<p>公司地址：陌陌&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;哈哈</p>
			<p class="lxfs"><span>手机：10086</span><span>座机：10086</span><span>邮箱：2329659005@qq.com</span></p>
		</div>
       
<script type="text/javascript" src="js/tc.js"></script>
<script src="js/ms.js" type="text/jscript"></script>
<script type="text/javascript" src="js/kg.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/lunbo.js"></script>
<script src="jquery-1.12.4.min.js"></script>
<script src="js/jquery-1.12.4.min.js" type="text/jscript"></script>
    <script type="text/javascript" src="js/flq.js"></script>
     
   
	</body>
	
	</html>
