<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="__BSCSS__/bootstrap.css">
<link rel="stylesheet" href="__CSS__/cssanoir_.css">
<!--<link rel="stylesheet" href="__CSS__/FIFA.css">-->
<link rel="stylesheet" href="__CSS__/lyn.css">
    
<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="__BSCSS__/bootstrap-theme.min.css">


<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="__JS__/jquery-1.11.0.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="__BSJS__/bootstrap.js"></script>

<!--<script src="__JS__/cssanoir.js"></script>-->
<!--<script src="__JS__/analytics.js"></script>-->
<!--<script src="__JS__/bsa.js"></script>-->
<!--<script src="__JS__/share.js"></script>-->
    
    
<html>
<head>
<meta charset="utf-8">
<title>欢迎</title>
<style>
body{margin:0;font-family: "微软雅黑";font-size: medium}
.open{margin-top:100px;border:none;cursor:pointer}
a:focus{outline:none;-moz-outline:none}
area{blr:expression_r(this.onFocus=this.blur())}
</style>
</head>
<body >


<!--     \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\微信头像\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\  -->
    <div class="container">
    <div style="text-align: center;">

        <div style="padding: 24px 48px; " class="col-md-4 col-sm-4 col-xs-4">
            <a href="<?php echo U('');?>" onfocus="this.blur();">
                <p style="color:red;">扫描关注我的微信</p>
                <img src="__IMG__/weixin.jpg"class="img-thumbnail" style="width: 250px; height: 250px;">
            </a>
            </div>
        <div style="padding: 24px 48px;" class="col-md-4 col-sm-4 col-xs-4">
            <a href="<?php echo U('');?>" onfocus="this.blur();">
                <img src="__IMG__/wxgeticon.jpg"class="img-thumbnail" style="width: 250px; height: 250px;">
                <p style="color:white; font-size: 20px">欢迎来到<b>李永楠</b>的个人主页</p>    
            </a>
	</div>
        <div style="padding: 24px 48px;" class="col-md-4 col-sm-4 col-xs-4">
            <a href="<?php echo U('');?>" onfocus="this.blur();">
                <p style="color:red;">扫描关注我的订阅号</p>
                <img src="__IMG__/dingyuehao.jpg"class="img-thumbnail" style="width: 250px; height: 250px;">
            </a>
        </div>
        </div>
    </div>
 <!--     \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\旋转木马1170×620\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\  -->
    <div class="container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
        </ol>
        
        <div class="carousel-inner" role="listbox">
            
<!-- *******************15行代码完成旋转木马的一个页面（item）
××××××××××××××××××××.item 在Bootstrap.js旋转木马的函数中被调用。
********************dcm-list vertical实现文字和图片的布局phototop将白底文字放到图片下方，
×××××××××××××××××××××i-wrap实现鼠标经过图片变白的功能*** -->            
            <div class="dcm-list vertical phototop overlap item active">
                <div class=".ph-lnd-12 figure i-wrap">
                    <a class="dcm-internal" href="">
                    <img data-src="holder.js/1170x620/auto/#666:#444/text:First slide"
                         alt="First slide" src="__IMG__/slide1.jpg">
                    </a>
                </div>   
                <div class="dmc-teaser-content"><!--googleoff: index-->
                    <div class="dcm-roofline"> </div><!--googleon: index-->
                    <h4 class="dcm-title">
                        <a href="">我的博客：</a>
                    </h4><!--googleoff: index-->
                    <div class="dcm-pubdetails">Wednesday 23 July 2014 </div><!--googleon: index-->
                </div>
            </div>

<!-- *******************15行代码完成旋转木马的一个页面（item）************************ -->             
            <div class="dcm-list vertical phototop overlap item">
                <div class=".ph-lnd-12 figure i-wrap">
                    <a class="dcm-internal" href="">
                        <img data-src="holder.js/1170x620/auto/#666:#444/text:Second slide"
                             alt="Second slide" src="__IMG__/slide2.jpg">
                    </a>
                </div>   
                <div class="dmc-teaser-content"><!--googleoff: index-->
                    <div class="dcm-roofline"> </div><!--googleon: index-->
                    <h4 class="dcm-title">
                        <a href="">My Home：</a>
                    </h4><!--googleoff: index-->
                    <div class="dcm-pubdetails">Wednesday 23 July 2014 </div><!--googleon: index-->
                </div>
          </div>
<!-- *******************15行代码完成旋转木马的一个页面（item）************************ -->             
          <div class="dcm-list vertical phototop overlap  item ">
            <div class=".ph-lnd-12 figure i-wrap">
                <a class="dcm-internal" href="">
                    <img data-src="holder.js/1170x620/auto/#555:#333/text:Third slide" alt="Third slide" src="__IMG__/slide3.jpg">
                </a>
            </div>
            <div class="dmc-teaser-content"><!--googleoff: index-->
                <div class="dcm-roofline"> </div><!--googleon: index-->
                <h4 class="dcm-title">
                    <a href="">SexyLion：</a>
                </h4><!--googleoff: index-->
                <div class="dcm-pubdetails">Wednesday 23 July 2014 </div><!--googleon: index-->
            </div>
          </div>
          
        </div>
        
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
<!--  ///////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
    <section class="block tabs grid">
    <div class="container">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="pstod">
            <div class="row">
                
            <div class="col-md-3 col-sm-6 col-xs-12 site">
                <div class="site-thumb">
                    <!--<span class="site-date"><span>SOTD</span> 16</span>-->
                    <a href="http://t.qq.com/morganliyongnan?preview"><img class="img-responsive" src="__IMG__/tx.jpg"></a>
                    <div class="site-details">
                        <span class="pull-left text-muted">腾讯微博</span>
                        <span class="pull-right" data-toggle="tooltip" data-placement="left" title="" data-original-title="1 Likes">1<i class="fa fa-heart"></i></span>
                    </div>
                 </div>
             </div>

            <div class="col-md-3 col-sm-6 col-xs-12 site">
                <div class="site-thumb">
                    <!--<span class="site-date"><span></span>人人</span>-->
                    <a href="http://www.renren.com/334452905/profile"><img class="img-responsive" src="__IMG__/renren.jpg"></a>
                    <div class="site-details">
                        <span class="pull-left text-muted">欢迎访问我的人人网主页</span>
                        <span class="pull-right" data-toggle="tooltip" data-placement="left" title="" data-original-title="1 Likes">1<i class="fa fa-heart"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 site">
                <div class="site-thumb">
                    <!--<span class="site-date"><span>SOTD</span> 8</span>-->
                    <a href="http://blog.sina.com.cn/sxlyn"><img class="img-responsive" src="__IMG__/sina2.jpg"></a>
                    <div class="site-details">
                        <span class="pull-left text-muted">新浪博客！</span>
                        <span class="pull-right" data-toggle="tooltip" data-placement="left" title="" data-original-title="1 Likes">1<i class="fa fa-heart"></i></span>
                    </div>
                </div>
            </div>

             <div class="col-md-3 col-sm-6 col-xs-12 site">
                <div class="site-thumb">
                    <!--<span class="site-date"><span>SOTD</span> 7</span>-->
                    <a href="http://www.baidu.com/p/370972713"><img class="img-responsive" src="__IMG__/baidu.jpg"></a>
                    <div class="site-details">
                            <span class="pull-left text-muted">欢迎访问我的百度主页</span>
                            <span class="pull-right" data-toggle="tooltip" data-placement="left" title="" data-original-title="19 Likes">1<i class="fa fa-heart"></i></span>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////   -->
<!--    <div>
        <a href="<?php echo U('');?>" onfocus="this.blur();">
            <img src="__IMG__/logo.jpg" width="413" height="380" alt="点击安装"/ class="open">
        </a>
    </div>-->
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////   -->    
    </div>  

</body>
</html>