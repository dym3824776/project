<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    @yield('tkd')
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="/base/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="/base/css/style.css" rel="stylesheet" type="text/css" media="all">
    <link href="/base/css/nav.css" rel="stylesheet" type="text/css" media="all">
    <link href="http://apps.bdimg.com/libs/fontawesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

    <script src="/base/js/jquery.min.js"></script>
    <script src="/base/js/jquery.easydropdown.js"></script>
    <script src="/base/js/scripts.js"></script>
    <script src="/base/js/easyResponsiveTabs.js"></script>
    <script src="/base/js/responsiveslides.min.js"></script>



    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- slider -->
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                manualControls: '#slider3-pager',
            });
        });
    </script>
    <!-- slider -->
</head>
<body>

<!-- //header -->
<div id="home" class="header">
    <div class="header-top">
        <!-- container -->
        <div class="container">
            <div class="top-nav">
                <ul class="nav">
                    <li class="dropdown1" style="color: #CCC;font-size:11px;"><i class="fa fa-phone"></i> 18311383166</li>
                    <li class="dropdown1" style="color: #CCC;font-size:11px;"><i class="fa fa-envelope"></i> dengyuming0308@163.com</li>

                </ul>
            </div>
            <div class="nav-right">
                <p><a href="mailto:dengyuming0308@163.com">登陆</a>
            </div>
            <div class="clearfix"> </div>
            <!-- script-for-menu -->
        </div>
        <!-- //container -->
    </div>
    <div class="header-bottom">
        <!-- container -->
        <div class="container" >
            <div class="head-logo" >
                <a href="index.html"><img src="/base/images/logo_9.gif" alt="" style="width: 130px;"/></a>
                <b style="color: #ccc;"><span>｜</span><i></i></b>
            </div>
            <div class="logo-right">
                <p>468 x 60</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //container -->
    </div>
</div>
<!-- //header -->

<!-- bg-banner -->
<div class="bg-banner">
    <div class="banner-bottom-bg">
        <div class="banner-bg" style="position: absolute;top: 0;left: 0"></div>

        <div class="">
            <div class="container">
                <!-- banner -->
                <div class="banner">
                    <div class="banner-grids">
                        <!-- //nav -->
                        <style>
                            li.cur a.top{
                                background: #CACACA;
                                color: #000000 !important;
                            }

                        </style>
                        <div class="banner-top">
                            <span class="menu">MENU</span>
                            <ul class="nav banner-nav">
                                <li>06 Dec 2015</li>
                                <li class="dropdown1"><a href="/">首页</a></li>
                                <li class="dropdown1 cur"><a class="top" href=".html" >首页首页</a>
                                    <ul class="dropdown2">
                                        <li ><a href=""  >首页首页</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown1 "><a class="top" href=".html" >首页首页</a>
                                    <ul class="dropdown2">
                                        <li ><a href=""  >首页首页</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown1 "><a class="top" href=".html" >首页首页</a>
                                    <ul class="dropdown2">
                                        <li ><a href=""  >首页首页</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown1 "><a class="top" href=".html" >首页首页</a>
                                    <ul class="dropdown2">
                                        <li ><a href=""  >首页首页</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown1 "><a class="top" href=".html" >首页首页</a>
                                    <ul class="dropdown2">
                                        <li ><a href=""  >首页首页</a></li>
                                    </ul>
                                </li>


                            </ul>
                            <script>
                                $("span.menu").click(function(){
                                    $(" ul.nav").slideToggle("slow" , function(){
                                    });
                                });
                            </script>
                        </div>
                        <!-- //nav -->
                        @yield('content')
                    </div>
                </div>
                <!-- //banner -->
            </div>
        </div>
    </div>
</div>

<!-- //footer -->
<!-- //bg-banner -->
<div class="footer">
    <!-- container -->
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 recent-posts footer-left">
                <h3>About me</h3>
                <!-- <ul>
                   <li ><span>职 业 :</span><a href="javascript:;" style="font-family: 微软雅黑">PHP网站开发</a></li>
                   <li > <span>Q  Q :</span><a href="javascript:;" style="font-family: 微软雅黑">549574603</a></li>
                   <li ><span>姓 名 :</span><a href="javascript:;" style="font-family: 微软雅黑">邓宇鸣</a></li>
                   <li ><span>主 页 :</span><a href="javascript:;" style="font-family: 微软雅黑">www.dyuming.com</a></li>
                   <li ><span>住 址 :</span><a href="javascript:;" style="font-family: 微软雅黑">北京朝阳</a></li>

               </ul>-->
            </div>
            <div class="col-md-3 viewport">
                <h3>About Viewport</h3>
                <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.

                    <span>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>

                    Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.
                    Donec id elit non mi porta gravida at eget metus.
                </p>
            </div>
            <div class="col-md-3 footer-comments">
                <h3>Comments</h3>
                <ul>
                    <li>Orman Clark on <a href="#">Sample Post With Threaded Comments</a></li>
                    <li>Orman Clark on <a href="#">Sample Post With Threaded Comments</a></li>
                    <li>Orman Clark on <a href="#">Sample Post With Threaded Comments</a></li>
                    <li>Orman Clark on <a href="#">Sample Post With Threaded Comments</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-logo">
                <a href="index.html"><img src="/base/images/logo_9.gif" alt="" style="width: 130px;"/></a>
                <!--<p>灰太狼的博客基于ThinkPHP开发,纯手工制作。新手一枚,欢迎各路大神<br/><a href="#"  class="message">留个脚印</a></p>-->
            </div>
            <div class="clearfix"> </div>
            <div class="copyright">
                <p>Copyright &copy; 2015.Company name All rights reserved.</p>
            </div>
        </div>
    </div>
</div>
<!-- //footer -->

</body>
</html>