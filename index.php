<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx4eb7ff7efd54fb54", "983c06169fa72806c94a94c7c28eade3");
$signPackage = $jssdk->GetSignPackage();

$rate = (int)file_get_contents("rate.txt");

?>
<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=640,user-scalable=no,target-densitydpi=device-dpi">
<meta name="apple-mobile-web-app-status-bar-style" content="blank" />
<meta name="format-detection" content="telephone=no" />
<title>板城烧锅 · 启程泸州</title>
<link rel="stylesheet" type="text/css" href="css/swiper.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<script type="text/javascript" src="js/zepto.js"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/swiper.jquery.min.js"></script>
<style type="text/css">
	body,html{ margin:0; padding: 0; background: #000; font:16px/1 Arial,Helvetica;}
	.control{
		position: fixed;
		z-index: 9999999;
		height: 100%;
		width: 100%;
	}
	body .bottom {
		right:30px;
		top:auto;
		bottom:30px;
		background: none;
		color:#FFF;
		font-style: italic;
		font:6em/1 Arial,Helvetica;
	}
	.start {
		position: relative;
		width: 100%;
		height: 100%;
		overflow: hidden;
	}
	.hide{
		display: none;
	}

	.start img.top{
		position: absolute;
		top:0;
		left: 0;
	}



.spinner {
  margin: 36px auto;
  width: 90px;
  height: 90px;
  position: relative;
}
 
.container1 > div, .container2 > div, .container3 > div {
  width: 27px;
  height: 27px;
  background-color: #3673AE; 
  border-radius: 100%;
  position: absolute;
  -webkit-animation: bouncedelay 1.2s infinite ease-in-out;
  animation: bouncedelay 1.2s infinite ease-in-out;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
 
.spinner .spinner-container {
  position: absolute;
  width: 100%;
  height: 100%;
}
 
.container2 {
  -webkit-transform: rotateZ(45deg);
  transform: rotateZ(45deg);
}
 
.container3 {
  -webkit-transform: rotateZ(90deg);
  transform: rotateZ(90deg);
}
 
.circle1 { top: 0; left: 0; }
.circle2 { top: 0; right: 0; }
.circle3 { right: 0; bottom: 0; }
.circle4 { left: 0; bottom: 0; }
 
.container2 .circle1 {
  -webkit-animation-delay: -1.1s;
  animation-delay: -1.1s;
}
 
.container3 .circle1 {
  -webkit-animation-delay: -1.0s;
  animation-delay: -1.0s;
}
 
.container1 .circle2 {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}
 
.container2 .circle2 {
  -webkit-animation-delay: -0.8s;
  animation-delay: -0.8s;
}
 
.container3 .circle2 {
  -webkit-animation-delay: -0.7s;
  animation-delay: -0.7s;
}
 
.container1 .circle3 {
  -webkit-animation-delay: -0.6s;
  animation-delay: -0.6s;
}
 
.container2 .circle3 {
  -webkit-animation-delay: -0.5s;
  animation-delay: -0.5s;
}
 
.container3 .circle3 {
  -webkit-animation-delay: -0.4s;
  animation-delay: -0.4s;
}
 
.container1 .circle4 {
  -webkit-animation-delay: -0.3s;
  animation-delay: -0.3s;
}
 
.container2 .circle4 {
  -webkit-animation-delay: -0.2s;
  animation-delay: -0.2s;
}
 
.container3 .circle4 {
  -webkit-animation-delay: -0.1s;
  animation-delay: -0.1s;
}
 
@-webkit-keyframes bouncedelay {
  0%, 80%, 100% { -webkit-transform: scale(0.0) }
  40% { -webkit-transform: scale(1.0) }
}
 
@keyframes bouncedelay {
  0%, 80%, 100% {
    transform: scale(0.0);
    -webkit-transform: scale(0.0);
  } 40% {
    transform: scale(1.0);
    -webkit-transform: scale(1.0);
  }
}


.clearfix{*zoom:1}.clearfix:before,.clearfix:after{display:table;line-height:0;content:""}.clearfix:after{clear:both}


.fixedBg{
	position: fixed;
	z-index:999999999999999;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background: rgba(0,0,0,0.5);
	color:white;
	font:24px/1 Arial;
}

.fixedCenter{
	 left:50%; top:46%; 
	 white-space: nowrap;
	 transform:translate(-50%,-50%); -webkit-transform:translate(-50%,-50%); 
	 position:absolute;
}

.zhong,.wei,.ago{
	font-size:1.6rem;
}

.fixedCenter p{
	margin:5px 0;
}
input[type=text],input[type=button], a.regbtn {
  font-family: sans-serif;
  font-size: 2rem;
  line-height: 3rem;
  padding: 2px 10px;
  margin:5px 10px;
  border:1px solid #ccc;
  border-radius: 12px;
  width: 220px;
  text-transform: uppercase;
}

input[type=text]:focus {
    border:1px solid #aaa;
    box-shadow: 0px 0px 8px #7bc1f7; 
    -moz-box-shadow: 0px 0px 8px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 8px #7bc1f7; 
}

a.regbtn {
	display: inline-block;
  text-align: center;
  text-decoration: none;
  color:#000;
  margin-top:10px;
  background:rgb(201, 218, 255);
}

.hidden{
	display: none;
}

.star { width: 100%;height: 100%}
.star span{ display: block;position: absolute; background: url(images/star.png) no-repeat;width: 95px;height: 95px;}

.star .star_1{ right: 85px;top: 145px;-webkit-animation:star 1s 1s infinite linear; }
.star .star_2{ left: 120px;top: 55px; background-size: 60px 60px;-webkit-animation:star 1.5s 2s infinite linear; }
.star .star_3{ left: 20px;top: 90px; background-size: 25px 25px;-webkit-animation:star 1s 4s infinite linear; }
.star .star_4{ left: 50px;top: 150px; background-size: 50px 0px;-webkit-animation:star 2s 5s infinite linear; }
.star .star_5{ left: 130px;top: 265px; background-size: 60px 60px;-webkit-animation:star 3s 3s infinite linear; }
.star .star_6{ right: 178px;top: 15px;background-size: 50px 50px; -webkit-animation:star 3.5s 3s infinite linear; }
.star .star_7{ right: 185px;top: 105px;background-size: 40px 40px;-webkit-animation:star 3s 4s infinite linear;  }
.star .star_8{ right: 258px;top: 160px;background-size: 60px 60px;-webkit-animation:star 1.5s 4s infinite linear;  }
.star .star_9{ right: 145px;top: 80px;background-size: 60px 60px;-webkit-animation:star 2s 4s infinite linear;  }
.star .star_10{ right: 0px;top: 250px;background-size: 30px 30px;-webkit-animation:star 2s 2s infinite linear;  }
.star .star_11{ left: 50px;top: 300px;background-size: 20px 20px;-webkit-animation:star 2s 2s infinite linear;  }

.star .star_21{ right: 85px;top: 145px;-webkit-animation:star 1s 1s infinite linear; }
.star .star_22{ left: 120px;top: 55px; background-size: 60px 60px;-webkit-animation:star 1.5s 2s infinite linear; }
.star .star_23{ left: 20px;top: 90px; background-size: 25px 25px;-webkit-animation:star 1s 4s infinite linear; }
.star .star_24{ right: 0px;top: 250px; background-size: 50px 0px;-webkit-animation:star 2s 5s infinite linear; }
.star .star_25{ left: 130px;top: 250px; background-size: 60px 60px;-webkit-animation:star 3s 3s infinite linear; }
.star .star_26{ right: -22px;top: 194px; background-size: 50px 50px; -webkit-animation:star 3.5s 3s infinite linear; }
.star .star_27{ right: 185px;top: 105px;background-size: 40px 40px;-webkit-animation:star 3s 4s infinite linear;  }
.star .star_28{ right: 178px;top: 32px; background-size: 60px 60px;-webkit-animation:star 1.5s 4s infinite linear;  }
.star .star_29{ right: 94px;top: 80px;background-size: 60px 60px;-webkit-animation:star 2s 4s infinite linear;  }
.star .star_210{ right: -39px;top: 131px; background-size: 30px 30px;-webkit-animation:star 2s 2s infinite linear;  }
.star .star_211{ left: 50px;top: 263px;background-size: 20px 20px;-webkit-animation:star 2s 2s infinite linear;  }

@-webkit-keyframes star{ 0%{ opacity: 1;}50%{ opacity: 0.5;}100%{opacity: 0;}  }


@-webkit-keyframes left01{ 0%{ left:-320px;} 100%{left:0;}  }
@-webkit-keyframes right01{ 0%{ right:-320px;} 100%{right:0;}  }
@-webkit-keyframes left02{ 0%{ left:0px;} 100%{left:-320px;}  }
@-webkit-keyframes right02{ 0%{ right:0px;} 100%{right:-320px;}  }

@-webkit-keyframes frame081{
 0%{ height:0px; width:90px;} 100%{ height:400px; width:90px;} 
}
.frame081{
	 -webkit-animation:frame081 1.5s 0s 1 linear forwards;
}

@-webkit-keyframes frame082{
 0%{ height:0px; width:62px;} 65%{ height:400px; width:62px;}  100%{ height:400px; width:110px;} 
}
.frame082{
	 -webkit-animation:frame082 1.5s 0s 1 linear forwards;
}

@-webkit-keyframes frame111{
 0%{ height:400px; width:0px;} 100%{ height:400px; width:640px;} 
}
.frame111{
	 -webkit-animation:frame111 1.5s 0s 1 linear forwards;
}
.frame112{
	 -webkit-animation:frame111 1.5s 1s 1 linear forwards;
}
@-webkit-keyframes frame121{
 0%{ height:400px; width:0px;} 100%{ height:400px; width:640px;} 
}
.frame121{
	 -webkit-animation:frame121 1.5s 0s 1 linear forwards;
}



body,html{
	height:100%;
}
.abs{
	position:absolute;
	top:0;
}
.bg01, .bg02{
	position:absolute;
	height:100%;
	top:0;
	-webkit-animation-fill-mode: forwards;
}
.hide2{
	display:none;
}
.alpha0{
	opacity:0;
}
.top0{
	-webkit-transform: translateY(-1008px);
}
.scrollbg{
	position: relative;
}
.swiper-slide{
	overflow-x: hidden;
}
.loading{
	position: absolute;
	z-index: 999999999999999;
	background:#fff;
	width:100%;
	height: 100%;
	overflow: hidden;
	display:none;
}
.loading p{
	  font: 18px/1 Arial;
	  color: #3673AE;
	  text-align: center;
	  padding-top: 140px;
}
.fixedCenter .regInfo{
	color:#fff;
	text-align: center;
	font-size:36px;
	 margin-top: 40px;
}
a{
	  -webkit-tap-highlight-color: rgba(0,0,0,0);
  -webkit-tap-highlight-color: transparent; /* For some Androids */
}


.audio-controls { cursor: pointer; width: 44px; height: 44px; position: absolute; top: 3%; right: 3%; background: url("images/icons.png") no-repeat scroll 0 0; z-index:99;}
.on { 
-webkit-backface-visibility:visible;
-webkit-transform-origin:center center;
-webkit-animation:audio 2s 0s infinite linear normal none ;}
@-webkit-keyframes audio{
0%{
-webkit-transform:rotate(0deg);
} 100%{
-webkit-transform:rotate(360deg);
} 
}

.yaoCon{
	color:rgba(0,0,0,0);
}

</style>
 </head>
 <body>
<audio id="audio" autoplay="autoplay" loop="loop">
<source src="bgm.mp3" />
</audio>
<div class="loading">
	<div class="spinner" style="top:30%">
	  <div class="spinner-container container1">
	    <div class="circle1"></div>
	    <div class="circle2"></div>
	    <div class="circle3"></div>
	    <div class="circle4"></div>
	  </div>
	  <div class="spinner-container container2">
	    <div class="circle1"></div>
	    <div class="circle2"></div>
	    <div class="circle3"></div>
	    <div class="circle4"></div>
	  </div>
	  <div class="spinner-container container3">
	    <div class="circle1"></div>
	    <div class="circle2"></div>
	    <div class="circle3"></div>
	    <div class="circle4"></div>
	  </div>
	<p>读取中</p>
	</div>
</div>

<div class="start" style="background:url(images/02.jpg) no-repeat; ">
	<div class="bg01" style="width:50%; left:0px; background:url(images/01bg.jpg) no-repeat;  "></div>
	<div class="bg02" style="width:50%; right:0px; background:url(images/01bg.jpg) no-repeat -320px 0%; "></div>

	<img alt="" class="top jing" style="-webkit-animation-duration:3s; display:none; z-index:999" src="images/01jing.png" width="640">
	<img alt="" class="top wine01" src="images/01wine.png" width="640" style="display:none">
	<a href="javascript:start();" style="width:100%; display:block; height:30%; top:40%; position:absolute; z-index:99999;"></a>

	<div class="star" style="opacity:0; position:absolute; top:230px;">
            <span class="star_1"></span>
            <span class="star_2"></span>
            <span class="star_3"></span>
            <span class="star_4"></span>
            <span class="star_5"></span>
            <span class="star_6"></span>
            <span class="star_7"></span>
            <span class="star_8"></span>
            <span class="star_9"></span>
            <span class="star_10"></span>
            <span class="star_11"></span>
			<div style="position:absolute; width:100%; height:100%; left:0; top:400px;">
				<span class="star_21"></span>
				<span class="star_22"></span>
				<span class="star_23"></span>
				<span class="star_24"></span>
				<span class="star_25"></span>
				<span class="star_26"></span>
				<span class="star_27"></span>
				<span class="star_28"></span>
				<span class="star_29"></span>
				<span class="star_210"></span>
				<span class="star_211"></span>
			</div>
        </div>
</div>

<div class="hide2 logo" style="position: fixed;z-index:99999; top:0; width:350px; overflow: hidden;"><img alt="" src="images/logo.png" width="640"></div>
<div class="hide2 swiper-button-prev swiper-button-white" style="position: fixed;z-index:9999999;"></div>
<div class="hide2 swiper-button-next swiper-button-white" style="position: fixed;z-index:9999999;"></div>



<div class="hide swiper-container">
	<div class="audio-controls on"></div>
	

    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide regCon">
			<img alt="" src="blank.gif" data-src="images/03bg.jpg" width="640">
			<div class="yaoCon"><div data-anim2="animated  infinite shake" class="abs hidden yao" style="left:0; top:0;"><img alt="" src="images/yao.png" width="640" height="1008"></div></div>
			<div class="fixedBg hidden ago"><div class="fixedCenter">抽奖时间为：x年x月x日  00：00：00</div></div>
			<div class="fixedBg hidden zhong"><div class="fixedCenter">恭喜您中奖了，请到板城酒业展台前领取奖品吧<p class="regInfo"></p></div></div>
			<div class="fixedBg hidden wei"><div class="fixedCenter">未中奖，不要遗憾，继续努力吧！</div></div>
			<div class="fixedBg hidden reg"><div class="fixedCenter">
				<p><span>姓名：<input type="text" name="name" /></span></p>
				<p><span>电话：<input type="text" name="phone" /></span></p>
				<p><span>　　　<a href="#" class="regbtn">提交</a></span></p>
			</div></div>
		</div>
        <div class="swiper-slide">
			<img alt="" src="images/02.jpg" width="640">
			<a href="javascript:mySwiper.slideTo(14)" style="position:absolute;left:0; top:880px; width:210px; height:128px;"></a>
			<a href="javascript:mySwiper.slideTo(15)" style="position:absolute;left:210px; top:880px; width:210px; height:128px;"></a>
			<a href="tel:18831117117" style="position:absolute;left:430px; top:880px; width:210px; height:128px;"></a>
		</div>
        <div class="swiper-slide scroll">
			<img alt="" class="scrollbg" src="blank.gif" data-src="images/04bg.jpg" height="1008" width="2034" style="left:-697px">
			<img alt="" src="blank.gif" data-src="images/04text1.png" width="640" height="1008" data-anim="animated fadeInUp" class="alpha0 abs" style="-webkit-animation-delay:0.5s; -webkit-animation-fill-mode: forwards;">
			<img alt="" src="blank.gif" data-src="images/04text2.png" width="640" height="1008" data-anim="animated fadeInUp" class="alpha0 abs" style="-webkit-animation-delay:1s; -webkit-animation-fill-mode: forwards;">
		</div>
        <div class="swiper-slide scroll">
			<img alt="" class="scrollbg" src="blank.gif" data-src="images/05bg.jpg" height="1008" width="1512" style="left:-436px">
			<img alt="" src="blank.gif" data-src="images/05text.png" width="640" height="1008" data-anim="animated fadeInUp" class="alpha0 abs" style="-webkit-animation-delay:0.5s; -webkit-animation-fill-mode: forwards;">
		</div>
		<div class="swiper-slide scroll">
			<img alt="" class="scrollbg" src="blank.gif" data-src="images/06bg.jpg" height="1008" width="2359" style="left:-859.5px">
			<img alt="" src="blank.gif" data-src="images/06text.png" width="640" height="1008" data-anim="animated fadeInUp" class="alpha0 abs" style="-webkit-animation-delay:0.5s; -webkit-animation-fill-mode: forwards;">
		</div>
		<div class="swiper-slide scroll">
			<img alt="" class="scrollbg" src="blank.gif" data-src="images/07bg.jpg" height="1008" width="2441" style="left:-1570.5px">
			<img alt="" src="blank.gif" data-src="images/07text.png" width="640" height="1008" data-anim="animated fadeInUp" class="alpha0 abs" style="-webkit-animation-delay:0.5s; -webkit-animation-fill-mode: forwards;">
		</div>
		<div class="swiper-slide scroll">
			<img alt="" class="scrollbg" src="blank.gif" data-src="images/08bg.jpg" height="1008" width="1515" style="left:-437.5px">
			<img alt="" src="blank.gif" data-src="images/08text.png" width="640" height="1008" data-anim="animated fadeInUp" class="alpha0 abs" style="z-index:999;position:absolute; left:0; top:0; -webkit-animation-delay:2.5s;">
			<div data-anim="frame081" class=" abs" style="right:0; overflow:hidden; width:152px; -webkit-animation-delay:0s;">
			<img alt="" src="blank.gif" data-src="images/08text2.png" width="640" height="1008" style="position:absolute; right:0"></div>
			<div data-anim="frame082" class=" abs" style="right:90px; overflow:hidden; width:62px; -webkit-animation-delay:1.5s;">
			<img alt="" src="blank.gif" data-src="images/08text2.png" width="640" height="1008" style="position:absolute; right:-90px"></div>
		</div>
		<div class="swiper-slide scroll">
			<img alt="" class="" src="blank.gif" data-src="images/09bg.jpg" height="1008" width="640">
			<div data-anim="animated fadeInUp" class="alpha0 abs" style="left:0; top:0; -webkit-animation-delay:0.5s; -webkit-animation-fill-mode: forwards;">
			<img alt="" src="blank.gif" data-src="images/09text.png" width="640" height="1008"></div>
		</div>
		<div class="swiper-slide scroll">
			<img alt="" class="" src="blank.gif" data-src="images/10bg.jpg" height="1008" width="640">
			<img alt="" src="blank.gif" data-src="images/10text1.png" width="640" height="1008" data-anim="animated fadeIn" class="alpha0 abs" style="z-index:999;position:absolute; left:0; top:0;-webkit-animation-delay:0s; -webkit-animation-fill-mode: forwards;">
			<img alt="" src="blank.gif" data-src="images/10text2.png" width="640" height="1008" data-anim="animated bounceInDown" class="top0 abs" style="z-index:999;position:absolute; left:0; top:0;-webkit-animation-delay:1s; -webkit-animation-fill-mode: forwards;">
			<img alt="" src="blank.gif" data-src="images/10text.png" width="640" height="1008" data-anim="animated fadeInUp" class="alpha0 abs" style="z-index:999;position:absolute; left:0; top:0;-webkit-animation-delay:2s; -webkit-animation-fill-mode: forwards;">

		</div>
		<div class="swiper-slide scroll">
			<img alt="" class="" src="blank.gif" data-src="images/11bg.jpg" height="1008" width="640">
			<div data-anim="animated fadeInUp" class="alpha0 abs" style="left:0; top:0; -webkit-animation-delay:2s;">
			<img alt="" src="blank.gif" data-src="images/11text.png" width="640" height="1008"></div>
			<div data-anim="frame111" class=" abs" style=" overflow:hidden; left:0;width:152px; -webkit-animation-delay:0s;">
			<img alt="" src="blank.gif" data-src="images/11text1.png" width="640" height="1008"></div>
			<div data-anim="frame112" class=" abs" style="overflow:hidden;left:0; width:62px; -webkit-animation-delay:1s;">
			<img alt="" src="blank.gif" data-src="images/11text2.png" width="640" height="1008"></div>
		</div>
		<div class="swiper-slide scroll">
			<img alt="" class="" src="blank.gif" data-src="images/12bg.jpg" height="1008" width="640">
			<div data-anim="animated fadeInUp" class="alpha0 abs" style="left:0; top:0; -webkit-animation-delay:2s;">
			<img alt="" src="blank.gif" data-src="images/12text.png" width="640" height="1008"></div>
			<div data-anim="animated fadeInDown" class="alpha0 abs" style=" left:0; -webkit-animation-delay:0.5s;">
			<img alt="" src="blank.gif" data-src="images/12text1.png" width="640" height="1008"></div>
			<div data-anim="animated fadeInLeft" class="alpha0 abs" style="left:0;-webkit-animation-delay:1s;">
			<img alt="" src="blank.gif" data-src="images/12text2.png" width="640" height="1008"></div>
		</div>
		<div class="swiper-slide scroll">
			<img alt="" class="scrollbg" src="blank.gif" data-src="images/13bg.jpg" height="1008" width="1484" style="left:-422px">

			<div data-anim="animated fadeInDown" class="alpha0 abs" style=" left:0; top:0; -webkit-animation-delay:0.5s;">
			<img alt="" src="blank.gif" data-src="images/13text2.png" width="640" height="1008"></div>
			<div data-anim="animated fadeInUp" class="alpha0 abs" style="left:0; top:0; -webkit-animation-delay:1s;">
			<img alt="" src="blank.gif" data-src="images/13text.png" width="640" height="1008"></div>

		</div>
		<div class="swiper-slide">
			<img alt="" class="scrollbg" src="blank.gif" data-src="images/14bg.jpg" height="1008" width="1512" style="left:-436px">
			<div data-anim="animated fadeInUp" class="alpha0 abs" style="left:0; top:0; -webkit-animation-delay:0.5s;">
			<img alt="" src="blank.gif" data-src="images/14text.png" width="640" height="1008"></div>
		</div>
		<div class="swiper-slide">
			<img alt="" class="" src="blank.gif" data-src="images/15bg.jpg" height="1008" width="640">

			<div data-anim="animated fadeInDown" class="alpha0 abs" style=" left:0; top:0; -webkit-animation-delay:0.5s;">
			<img alt="" src="blank.gif" data-src="images/15text1.png" width="640" height="1008"></div>
			<div data-anim="animated fadeInUp" class="alpha0 abs" style="left:0; top:0; -webkit-animation-delay:1s;">
			<img alt="" src="blank.gif" data-src="images/15text.png" width="640" height="1008"></div>

		</div>
		<div class="swiper-slide scroll">
			<img alt="" class="scrollbg abs" src="blank.gif" data-src="images/16bg.jpg" height="1008" width="640">
			<a href="javascript:mySwiper.slideTo(1)" style="position:absolute;left:0; top:867px; width:270px; height:140px;"></a>
			<a href="http://map.baidu.com/?newmap=1&amp;ie=utf-8&amp;s=s%26wd%3D泸州市江阳区黄舣泸州酒业集中发展区会展中心" style="position:absolute;right:0; top:867px; width:270px; height:140px;"></a>
		</div>
		<div class="swiper-slide">
			<img alt="" class="scrollbg" src="blank.gif" data-src="images/17bg.jpg" height="1008" width="640">
			<a href="javascript:mySwiper.slideTo(1)" style="position:absolute; z-index:99999999; right:0; top:0px; width:270px; height:140px;"></a>
			<a href="tel:18831117117" style="position:absolute;right:0; top:867px; width:270px; height:140px;"></a>
		</div>
    </div>
    <div class="swiper-pagination"></div>
    
    <div class="swiper-scrollbar"></div>
</div>


  <script type="text/javascript" src="js/pgwcookie.min.js"></script>
  <script type="text/javascript">


/* 音频暂停播放 */
var audioAuto = document.getElementById('audio');
audioAuto.play();
$(".audio-controls").click(function (){ 
	if (audioAuto.paused) {
		audioAuto.play();
		$(".audio-controls").addClass("on");
        }
        else {
		audioAuto.pause();
		$(".audio-controls").removeClass("on");
        }
});


/*
$(".swiper-container img").each(function(){
	if($(this).data("src") && !$(this).hasClass("loaded") ){
			$(this).attr("src",$(this).data("src")).addClass("loaded");
	}
});

imagesLoaded( document.querySelector('.swiper-container'), function( instance ) {
  $(".loading").hide();
});
*/

$(window).resize(function(){
	$(".fixedBg").height( $(window).height() );
});


//$.pgwCookie({name:"savedResult", value:null, path: '/', expires: 999999 });

var rate = parseInt("<?php echo $rate;?>");
if(isNaN(rate))rate=0;

function startDraw(){
	
	$('.yao').get(0).className='abs hidden yao';
	$(".yaoCon").data("con", $(".yaoCon").html());
	$(".yaoCon").html("");

	if(Math.random()*100<rate){
		$(".zhong").show();
		$.pgwCookie({name:"savedResult", value:"zhong", path: '/', expires: 999999 });
		$(".regInfo").html( $.pgwCookie({name:"savedName",path: '/', expires: 999999 })+"<br>"+$.pgwCookie({name:"savedPhone",path: '/', expires: 999999 }) );
		$.get("data/award.php", {name: window.savedName, tel: window.savedPhone} );
	}else{
		$.pgwCookie({name:"savedResult", value:"wei", path: '/', expires: 999999 });
		$(".wei").show();
	}
}

function initYaoyiyao(){

    if (window.DeviceMotionEvent) {
        window.addEventListener('devicemotion', yaoyiyaoHandler, false);
    } else{
        alert("亲，不好意思，您的手机不支持摇一摇");
    }
}
var SHAKE_THRESHOLD = 2000;// 定义一个变量保存上次更新的时间
var last_update = 0;// 紧接着定义x、y、z记录三个轴的数据以及上一次出发的时间
var x;
var y;
var z;
var last_x;
var last_y;
var last_z;
var speed=0;
var count = 0;// 为了增加这个例子的一点无聊趣味性，增加一个计数器
var isStarted=false;

function yaoyiyaoHandler(eventData) {
	if (isStarted) {
		return true;
	}

    // 获取含重力的加速度
    var acceleration = eventData.accelerationIncludingGravity; 
    // 获取当前时间
    var curTime = new Date().getTime(); 
    var diffTime = curTime -last_update;

    // 固定时间段
    if (diffTime > 80) {
        last_update = curTime; 

        x = acceleration.x; 
        y = acceleration.y; 
        z = acceleration.z;
			var s = Math.abs(x + y + z - last_x - last_y - last_z) / diffTime * 10000; 
			if(isNaN(s)) s=0;
			speed += s;

        if (speed > SHAKE_THRESHOLD) { 

					speed=0;
            		count++; //记录摇了多少次
            
					if(count==1){
						isStarted=true;
						setTimeout(function(){ startDraw(); }, 5000);
					}
        }

        last_x = x; 
        last_y = y; 
        last_z = z; 
    } 
}


$('.wei').click(function(){
	$(this).hide();
	showYao();
});


function showYao(){
	count=0;
	isStarted=false;
	$(".reg,.ago").hide();
	var da = $(".yaoCon").data("con");
	if(da) $(".yaoCon").html(da);
	 $(".yao").append( Math.random() );
	var anim = $(".yao").data("anim2") + (' a'+Math.random());
	$(".yao").show().addClass( anim );
	initYaoyiyao();
}

window.savedName =  $.pgwCookie({name:"savedName", path: '/', expires: 999999 });
window.savedPhone = $.pgwCookie({name:"savedPhone", path: '/', expires: 999999 });

  var submitting = false;
  $('.regbtn').click(function(){
	  var s = $.pgwCookie({name:"savedName", path: '/', expires: 999999 });
	  if(s){
		alert("您已提交过信息了。");
		showYao();
		return;
	  }
	  if(submitting) return;
	  var name = $.trim( $('input[name=name]').val() ); //获取手机号
	  var tel = $.trim( $('input[name=phone]').val() ); //获取手机号
	  var address = $.trim( $('[name=address]').val() ); //获取手机号
	  
	  if( $('input[name=name]').val()=="" || $('input[name=phone]').val()==""){
		alert("请填写完整信息后提交");return;
	  }
		if( ! (/^(0|86|17951)?(1[3-9][0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/).test(tel) && ! (/^１[０１２３４５６７８９]{10}$/).test(tel)  ){
			alert("请填写正确的手机号");return;
		  }

		  submitting = true;
		  $('input[name=name]').attr("disabled","disabled");
		  $('input[name=phone]').attr("disabled","disabled");
		  $('[name=address]').attr("disabled","disabled");
		  
		  $.pgwCookie({name:"savedName",value: name, path: '/', expires: 999999 });
		  $.pgwCookie({name:"savedPhone",value: tel, path: '/', expires: 999999 });
		showYao();
		
		  window.savedName = name;
		  window.savedPhone = tel;

	$.post("data/reg.php", { name:$('input[name=name]').val(), phone:$('input[name=phone]').val()}, function(data){
		if(data>0){
			alert("您的电话已有记录，活动结束后工作人员会尽快联系您");
			return;
		}
		 var date = new Date(); date.setTime(date.getTime() + (999999 * 60 * 1000));

		//$.pgwCookie({name:"savedName",value: name, path: '/', expires: 999999 });
		//$.pgwCookie({name:"savedPhone",value: tel, path: '/', expires: 999999 });
		//showYao();

		alert("恭喜，提交成功。开始摇奖吧!");
		$('.reg').hide();

	});
  });


window.requestAnimFrame = (function(callback) {
  return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame ||
  function(callback) {
    window.setTimeout(callback, 1000 / 60);
  };
})();


function toJSON(temp1){
    var str={}; for(i in temp1){  if(typeof temp1[i]!='object') str[i]=temp1[i] }
    return JSON.stringify(str);
}


var fps = 30;
var velo = 0;
function draw() {
	setTimeout(function(){
        requestAnimFrame(draw);
		$img = $(".scrollbg.active");
		if($img.size()==0)return;
        var left = parseFloat($img.css("left"));
		if(isNaN(left))left=0;
		left+=velo;
		if(left>0) left=0;
		if(left<$(window).width()-$img.width() ) left=$(window).width()-$img.width();
        $img.css("left", left);
	}, 1000/fps);
};
draw();

window.addEventListener('devicemotion', deviceMotionHandler, false);

function deviceMotionHandler(eventData) {
    var acc = eventData.accelerationIncludingGravity; 
    //websocket.send(toJSON(acceleration));
	accX = acc&& acc.x || eventData.alpha;
    if( Math.abs(accX) >0){
        velo = accX *2;
    }else{
        velo = 0;
    }
}





var mySwiper;
setTimeout(function(){ 
	$('.star').addClass("animated fadeIn");
	$('.jing').show().addClass("  animated flash infinite ");
	$('.wine01').show().addClass("  animated fadeInUp ");
}, 1000);


function showNext(s){
	var idx = s.activeIndex;
	var prev = s.previousIndex;
	var $img = $('.swiper-slide').eq( idx ).find('img,div');
	var $prevImg = $('.swiper-slide').eq( prev ).find('img,div');
	$img.each(function(){
		if($(this).data("anim")){
				var anim = $(this).data("anim");
				
				if( anim.match(/fade1/) ) {
					$(this).show().animate({ opacity: 1 }, 1000);
				}else{
					$(this).addClass(anim);
				}
		}
	});

	var $img = $('.swiper-slide img').eq( s.activeIndex );
	imagesLoaded($img).on("done",function(e){
		//$img.parent().parent().height( $img.height() );
	});
	
}


  function init(){
  		$('.hide').show();
		mySwiper = new Swiper('.swiper-container', {
		    speed: 400,
			initialSlide: 1,
		    spaceBetween: 0,
		    centeredSlides:true,
			followFinger:false,
		    effect: "slide",
		    //coverflow: {rotate: 10, stretch: 0, depth: 20, modifier: 1, slideShadows : true }, 
		    nextButton:".swiper-button-next",
		    prevButton:".swiper-button-prev",
		    onImagesReady:function(s){
		    	var $img = $('.swiper-slide img').eq( 0 );
		    	var h = $img.height();
		    	//$img.parent().parent().height( h );
		    },
		    onSlideChangeStart:function(s){
				var idx = s.activeIndex;
				var prev = s.previousIndex;
		    	var $img = $('.swiper-slide').eq( idx ).find('img,div');
		    	var $prevImg = $('.swiper-slide').eq( prev ).find('img,div');
		    	$(".bottom i").html( idx+1 );
				$('.scrollbg').removeClass('active');
				$img.each(function(){
					if($(this).data("src") && !$(this).hasClass("loaded") ){
							$(this).attr("src",$(this).data("src")).addClass("loaded");
					}
					if($(this).data("anim")){
							var anim = $(this).data("anim");
							$(this).removeClass(anim);
							if( anim.match(/fade1/) ) {
								$(this).show().animate({ opacity: 1 }, 1000);
							}else{
								$(this).addClass(anim);
							}
					}
				});
				$prevImg.each(function(){
					if($(this).data("anim")){
							var anim = $(this).data("anim");
							$(this).removeClass(anim);
					}
				});
		    	imagesLoaded( $img , function(e){
		    		var $img = $(e.elements[0]);
					if($img.hasClass("scrollbg") ){
						$img.addClass('active');
						if(!$img.attr('width')){
							$img.attr( "width", $img.width() );
							$img.css("left", -($img.width()-$(window).width())/2+'px' ).addClass('active');
							//console.log(idx,  'width="'+ $img.width() +'" style="left:'+ $img.css("left")  + '"' );
						}
					}
		    		//$img.parent().parent().height( $img.height() );
		    	} );
				if(idx>1){
					$('.hide2').show().css({opacity:0, zIndex:999999999999}).addClass("animated fadeInDown");
				}else{
					$('.hide2').hide();
				}
				if(idx==0){
					var s = $.pgwCookie({name:"savedName", path: '/', expires: 999999 });
					var r = $.pgwCookie({name:"savedResult", path: '/', expires: 999999 });
					if(1&&r && r=="zhong"){
						$("."+r).show();
						$(".regInfo").html( $.pgwCookie({name:"savedName",path: '/', expires: 999999 })+"<br>"+$.pgwCookie({name:"savedPhone",path: '/', expires: 999999 }) );
						return;
					}
					if(s){
						showYao();
					}else{
						$(".reg").show();
					}
					
				}
		    },
		    //onSliderMove:showNext,
		    //onTransitionEnd:showNext,
		    onSlideChangeEnd:showNext

		}); 
	}

	function start(){
		init();
		
		$(".jing, .star").remove();
		$('.bg01').css('-webkit-animation', 'left02 1s 0s 1 linear forwards');
		$('.bg02').css('-webkit-animation', 'right02 1s 0s 1 linear forwards');
		$('.wine01').addClass('animated fadeOut');
		setTimeout(function(){
			$('.start').remove();
		}, 1000);
	}


  </script>

<script type="text/javascript">

function getUrl (item) {
  var svalue = location.search.match(new RegExp("[\?\&]" + item + "=([^\&]*)(\&?)","i"));
  svalue = svalue ? svalue[1] : svalue;
  if(/openid/i.test(item)){
	  var s = $.cookie("openid");
	  if(s){
		svalue=s;
	  }else{
		svalue=+new Date()+Math.round(Math.random()*100);
		$.cookie("openid", svalue,{path:"/"}); 
	  }
  }
	return svalue;
}

try{
	var desc = document.querySelector("meta[name=description]").content;	
}catch(e){
	var desc = document.title;
}


var urlstr1=window.location.pathname;
var urlstrtmp=urlstr1.split("/");
var urlstr="http://"+window.location.host;
for(var i=0;i<urlstrtmp.length-1;i++){
    urlstr+=urlstrtmp[i]+"/";
}

window.imgUrl = 'http://1111hui.com/p/banb/images/yaoqing.jpg';
window.lineLink = 'http://1111hui.com/p/banb/' ;
window.shareTitle = '板城酒业 · 启程泸州' ;
window.descContent = '2015年中国国际酒业博览会 邀请函';
window.weiboContent = window.descContent;
window.appid = '';
window.isLast=false;


var winxinBro = navigator.userAgent.match(/MicroMessenger\/([\d.]+)/i);
var iOS = /iPhone/i.test(navigator.platform) || /iPod/i.test(navigator.platform) || /iPad/i.test(navigator.userAgent);  

var winxinVer = winxinBro? winxinBro[1] : 0;
winxinVer = parseFloat(winxinVer);


if( winxinVer>=6.1) {

	
!function(a,b){"function"==typeof define&&(define.amd||define.cmd)?define(function(){return b(a)}):b(a,!0)}(this,function(a,b){function c(b,c,d){a.WeixinJSBridge?WeixinJSBridge.invoke(b,e(c),function(a){g(b,a,d)}):j(b,d)}function d(b,c,d){a.WeixinJSBridge?WeixinJSBridge.on(b,function(a){d&&d.trigger&&d.trigger(a),g(b,a,c)}):d?j(b,d):j(b,c)}function e(a){return a=a||{},a.appId=z.appId,a.verifyAppId=z.appId,a.verifySignType="sha1",a.verifyTimestamp=z.timestamp+"",a.verifyNonceStr=z.nonceStr,a.verifySignature=z.signature,a}function f(a){return{timeStamp:a.timestamp+"",nonceStr:a.nonceStr,"package":a.package,paySign:a.paySign,signType:a.signType||"SHA1"}}function g(a,b,c){var d,e,f;switch(delete b.err_code,delete b.err_desc,delete b.err_detail,d=b.errMsg,d||(d=b.err_msg,delete b.err_msg,d=h(a,d,c),b.errMsg=d),c=c||{},c._complete&&(c._complete(b),delete c._complete),d=b.errMsg||"",z.debug&&!c.isInnerInvoke&&alert(JSON.stringify(b)),e=d.indexOf(":"),f=d.substring(e+1)){case"ok":c.success&&c.success(b);break;case"cancel":c.cancel&&c.cancel(b);break;default:c.fail&&c.fail(b)}c.complete&&c.complete(b)}function h(a,b){var d,e,f,g;if(b){switch(d=b.indexOf(":"),a){case o.config:e="config";break;case o.openProductSpecificView:e="openProductSpecificView";break;default:e=b.substring(0,d),e=e.replace(/_/g," "),e=e.replace(/\b\w+\b/g,function(a){return a.substring(0,1).toUpperCase()+a.substring(1)}),e=e.substring(0,1).toLowerCase()+e.substring(1),e=e.replace(/ /g,""),-1!=e.indexOf("Wcpay")&&(e=e.replace("Wcpay","WCPay")),f=p[e],f&&(e=f)}g=b.substring(d+1),"confirm"==g&&(g="ok"),"failed"==g&&(g="fail"),-1!=g.indexOf("failed_")&&(g=g.substring(7)),-1!=g.indexOf("fail_")&&(g=g.substring(5)),g=g.replace(/_/g," "),g=g.toLowerCase(),("access denied"==g||"no permission to execute"==g)&&(g="permission denied"),"config"==e&&"function not exist"==g&&(g="ok"),b=e+":"+g}return b}function i(a){var b,c,d,e;if(a){for(b=0,c=a.length;c>b;++b)d=a[b],e=o[d],e&&(a[b]=e);return a}}function j(a,b){if(z.debug&&!b.isInnerInvoke){var c=p[a];c&&(a=c),b&&b._complete&&delete b._complete,console.log('"'+a+'",',b||"")}}function k(){if(!("6.0.2">w||y.systemType<0)){var b=new Image;y.appId=z.appId,y.initTime=x.initEndTime-x.initStartTime,y.preVerifyTime=x.preVerifyEndTime-x.preVerifyStartTime,C.getNetworkType({isInnerInvoke:!0,success:function(a){y.networkType=a.networkType;var c="https://open.weixin.qq.com/sdk/report?v="+y.version+"&o="+y.isPreVerifyOk+"&s="+y.systemType+"&c="+y.clientVersion+"&a="+y.appId+"&n="+y.networkType+"&i="+y.initTime+"&p="+y.preVerifyTime+"&u="+y.url;b.src=c}})}}function l(){return(new Date).getTime()}function m(b){t&&(a.WeixinJSBridge?b():q.addEventListener&&q.addEventListener("WeixinJSBridgeReady",b,!1))}function n(){C.invoke||(C.invoke=function(b,c,d){a.WeixinJSBridge&&WeixinJSBridge.invoke(b,e(c),d)},C.on=function(b,c){a.WeixinJSBridge&&WeixinJSBridge.on(b,c)})}var o,p,q,r,s,t,u,v,w,x,y,z,A,B,C;if(!a.jWeixin)return o={config:"preVerifyJSAPI",onMenuShareTimeline:"menu:share:timeline",onMenuShareAppMessage:"menu:share:appmessage",onMenuShareQQ:"menu:share:qq",onMenuShareWeibo:"menu:share:weiboApp",previewImage:"imagePreview",getLocation:"geoLocation",openProductSpecificView:"openProductViewWithPid",addCard:"batchAddCard",openCard:"batchViewCard",chooseWXPay:"getBrandWCPayRequest"},p=function(){var b,a={};for(b in o)a[o[b]]=b;return a}(),q=a.document,r=q.title,s=navigator.userAgent.toLowerCase(),t=-1!=s.indexOf("micromessenger"),u=-1!=s.indexOf("android"),v=-1!=s.indexOf("iphone")||-1!=s.indexOf("ipad"),w=function(){var a=s.match(/micromessenger\/(\d+\.\d+\.\d+)/)||s.match(/micromessenger\/(\d+\.\d+)/);return a?a[1]:""}(),x={initStartTime:l(),initEndTime:0,preVerifyStartTime:0,preVerifyEndTime:0},y={version:1,appId:"",initTime:0,preVerifyTime:0,networkType:"",isPreVerifyOk:1,systemType:v?1:u?2:-1,clientVersion:w,url:encodeURIComponent(location.href)},z={},A={_completes:[]},B={state:0,res:{}},m(function(){x.initEndTime=l()}),C={config:function(a){z=a,j("config",a);var b=z.check===!1?!1:!0;m(function(){var a,d,e;if(b)c(o.config,{verifyJsApiList:i(z.jsApiList)},function(){A._complete=function(a){x.preVerifyEndTime=l(),B.state=1,B.res=a},A.success=function(){y.isPreVerifyOk=0},A.fail=function(a){A._fail?A._fail(a):B.state=-1};var a=A._completes;return a.push(function(){z.debug||k()}),A.complete=function(){for(var c=0,d=a.length;d>c;++c)a[c]();A._completes=[]},A}()),x.preVerifyStartTime=l();else{for(B.state=1,a=A._completes,d=0,e=a.length;e>d;++d)a[d]();A._completes=[]}}),z.beta&&n()},ready:function(a){0!=B.state?a():(A._completes.push(a),!t&&z.debug&&a())},error:function(a){"6.0.2">w||(-1==B.state?a(B.res):A._fail=a)},checkJsApi:function(a){var b=function(a){var c,d,b=a.checkResult;for(c in b)d=p[c],d&&(b[d]=b[c],delete b[c]);return a};c("checkJsApi",{jsApiList:i(a.jsApiList)},function(){return a._complete=function(a){if(u){var c=a.checkResult;c&&(a.checkResult=JSON.parse(c))}a=b(a)},a}())},onMenuShareTimeline:function(a){d(o.onMenuShareTimeline,{complete:function(){c("shareTimeline",{title:a.title||r,desc:a.title||r,img_url:a.imgUrl,link:a.link||location.href},a)}},a)},onMenuShareAppMessage:function(a){d(o.onMenuShareAppMessage,{complete:function(){c("sendAppMessage",{title:a.title||r,desc:a.desc||"",link:a.link||location.href,img_url:a.imgUrl,type:a.type||"link",data_url:a.dataUrl||""},a)}},a)},onMenuShareQQ:function(a){d(o.onMenuShareQQ,{complete:function(){c("shareQQ",{title:a.title||r,desc:a.desc||"",img_url:a.imgUrl,link:a.link||location.href},a)}},a)},onMenuShareWeibo:function(a){d(o.onMenuShareWeibo,{complete:function(){c("shareWeiboApp",{title:a.title||r,desc:a.desc||"",img_url:a.imgUrl,link:a.link||location.href},a)}},a)},startRecord:function(a){c("startRecord",{},a)},stopRecord:function(a){c("stopRecord",{},a)},onVoiceRecordEnd:function(a){d("onVoiceRecordEnd",a)},playVoice:function(a){c("playVoice",{localId:a.localId},a)},pauseVoice:function(a){c("pauseVoice",{localId:a.localId},a)},stopVoice:function(a){c("stopVoice",{localId:a.localId},a)},onVoicePlayEnd:function(a){d("onVoicePlayEnd",a)},uploadVoice:function(a){c("uploadVoice",{localId:a.localId,isShowProgressTips:0==a.isShowProgressTips?0:1},a)},downloadVoice:function(a){c("downloadVoice",{serverId:a.serverId,isShowProgressTips:0==a.isShowProgressTips?0:1},a)},translateVoice:function(a){c("translateVoice",{localId:a.localId,isShowProgressTips:0==a.isShowProgressTips?0:1},a)},chooseImage:function(a){c("chooseImage",{scene:"1|2",count:a.count||9,sizeType:a.sizeType||["original","compressed"]},function(){return a._complete=function(a){if(u){var b=a.localIds;b&&(a.localIds=JSON.parse(b))}},a}())},previewImage:function(a){c(o.previewImage,{current:a.current,urls:a.urls},a)},uploadImage:function(a){c("uploadImage",{localId:a.localId,isShowProgressTips:0==a.isShowProgressTips?0:1},a)},downloadImage:function(a){c("downloadImage",{serverId:a.serverId,isShowProgressTips:0==a.isShowProgressTips?0:1},a)},getNetworkType:function(a){var b=function(a){var c,d,e,b=a.errMsg;if(a.errMsg="getNetworkType:ok",c=a.subtype,delete a.subtype,c)a.networkType=c;else switch(d=b.indexOf(":"),e=b.substring(d+1)){case"wifi":case"edge":case"wwan":a.networkType=e;break;default:a.errMsg="getNetworkType:fail"}return a};c("getNetworkType",{},function(){return a._complete=function(a){a=b(a)},a}())},openLocation:function(a){c("openLocation",{latitude:a.latitude,longitude:a.longitude,name:a.name||"",address:a.address||"",scale:a.scale||28,infoUrl:a.infoUrl||""},a)},getLocation:function(a){a=a||{},c(o.getLocation,{type:a.type||"wgs84"},function(){return a._complete=function(a){delete a.type},a}())},hideOptionMenu:function(a){c("hideOptionMenu",{},a)},showOptionMenu:function(a){c("showOptionMenu",{},a)},closeWindow:function(a){a=a||{},c("closeWindow",{immediate_close:a.immediateClose||0},a)},hideMenuItems:function(a){c("hideMenuItems",{menuList:a.menuList},a)},showMenuItems:function(a){c("showMenuItems",{menuList:a.menuList},a)},hideAllNonBaseMenuItem:function(a){c("hideAllNonBaseMenuItem",{},a)},showAllNonBaseMenuItem:function(a){c("showAllNonBaseMenuItem",{},a)},scanQRCode:function(a){a=a||{},c("scanQRCode",{needResult:a.needResult||0,scanType:a.scanType||["qrCode","barCode"]},function(){return a._complete=function(a){var b,c;v&&(b=a.resultStr,b&&(c=JSON.parse(b),a.resultStr=c&&c.scan_code&&c.scan_code.scan_result))},a}())},openProductSpecificView:function(a){c(o.openProductSpecificView,{pid:a.productId,view_type:a.viewType||0},a)},addCard:function(a){var e,f,g,h,b=a.cardList,d=[];for(e=0,f=b.length;f>e;++e)g=b[e],h={card_id:g.cardId,card_ext:g.cardExt},d.push(h);c(o.addCard,{card_list:d},function(){return a._complete=function(a){var c,d,e,b=a.card_list;if(b){for(b=JSON.parse(b),c=0,d=b.length;d>c;++c)e=b[c],e.cardId=e.card_id,e.cardExt=e.card_ext,e.isSuccess=e.is_succ?!0:!1,delete e.card_id,delete e.card_ext,delete e.is_succ;a.cardList=b,delete a.card_list}},a}())},chooseCard:function(a){c("chooseCard",{app_id:z.appId,location_id:a.shopId||"",sign_type:a.signType||"SHA1",card_id:a.cardId||"",card_type:a.cardType||"",card_sign:a.cardSign,time_stamp:a.timestamp+"",nonce_str:a.nonceStr},function(){return a._complete=function(a){a.cardList=a.choose_card_info,delete a.choose_card_info},a}())},openCard:function(a){var e,f,g,h,b=a.cardList,d=[];for(e=0,f=b.length;f>e;++e)g=b[e],h={card_id:g.cardId,code:g.code},d.push(h);c(o.openCard,{card_list:d},a)},chooseWXPay:function(a){c(o.chooseWXPay,f(a),a)}},b&&(a.wx=a.jWeixin=C),C});
	
	wx.config({
	    debug: false,
	    appId: '<?php echo $signPackage["appId"];?>',
	    timestamp: <?php echo $signPackage["timestamp"];?>,
	    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
	    signature: '<?php echo $signPackage["signature"];?>',
	    jsApiList: [
	      "onMenuShareTimeline", "onMenuShareAppMessage", "onMenuShareQQ", "onMenuShareWeibo", "startRecord", "stopRecord", "onVoiceRecordEnd", "playVoice", "pauseVoice", "stopVoice", "onVoicePlayEnd", "uploadVoice", "downloadVoice", "chooseImage", "previewImage", "uploadImage", "downloadImage", "translateVoice", "getNetworkType", "openLocation", "getLocation", "hideOptionMenu", "showOptionMenu", "hideMenuItems", "showMenuItems", "hideAllNonBaseMenuItem", "showAllNonBaseMenuItem", "closeWindow", "scanQRCode", "chooseWXPay", "openProductSpecificView", "addCard", "chooseCard", "openCard"
	    ]
	  });
	  wx.ready(function () {
		
		wx.onMenuShareAppMessage({
	      title: window.shareTitle,
	      desc: window.descContent,
	      link: window.lineLink,
	      imgUrl: window.imgUrl,
	      trigger: function (res) {
	        
	      },
	      success: function (res) {
				$.get("data/log.php", {name: window.savedName, tel: window.savedPhone, type:"好友"});
	      },
	      cancel: function (res) {
	        
	      },
	      fail: function (res) {
	        
	      }
	    });
	
		wx.onMenuShareTimeline({
	      title: window.shareTitle,
	      link: window.lineLink,
	      imgUrl: window.imgUrl,
	      trigger: function (res) {
	        
	      },
	      success: function (res) {
				$.get("data/log.php", {name: window.savedName, tel: window.savedPhone, type:"朋友圈"});

	      },
	      cancel: function (res) {
	        
	      },
	      fail: function (res) {
	        
	      }
	    });
	
	  });
 } else{
	 
	 document.write('<script type="text/javascript" src="js/WeixinApi2.js" ><\/script>');
 }
  
</script>


<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?5d163d19ffe028aa445506926d3d5c55";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


 </body>
</html>
