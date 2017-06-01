@extends('home.layouts.base')

@section('tkd')
    <meta name="keywords" content="PHP" />
    <meta name="description" content="PHP">
    <title>Home</title>
@endsection

@section('content')
    <div class="banner-middle">
        <div class="strip"> </div>

        <!-- banner-bottom-grids -->
        <div class="banner-bottom-grids">
            <!-- banner-bottom-left -->
            <div class="col-md-8 banner-bottom-left">
                <div class="banner-bottom-left-grids travel-bottom-left">
                    <h2>最新更新</h2>

                    <div class="col-md-6 banner-left-grid travel-left-grid">
                        <h6>马克思打算</h6>
                        <span>10.00 - 12.00 | 3 9,2014</span>
                        <a href="/php_2.html"><img src="/base/images/sc1.jpg" alt="" /></a>
                        <p class="text">马克思打算马克思打算马克思打算马克思打算马克思打算马克思打算马克思打算马克思打算马克思打算马克思打算马克思打算马克思打算马克思打算</p>
                    </div>
                    <div class="col-md-6 banner-left-grid travel-left-grid">
                        <h6>马克思打算</h6>
                        <span>10.00 - 12.00 | 3 9,2014</span>
                        <a href="/linux_2.html"><img src="/base/images/sc1.jpg" alt="" /></a>
                        <p class="text">马克思打算马克思打算马克思打算马克思打算马克思打算马克思打算马克思打算马克思打算马克思打算马克思打算马克思打算马克思打算马克思打算</p>
                    </div>

                    <div class="clearfix"> </div>
                </div>


                <!-- post -->
                <div class="post">
                    <h3>php基础</h3>
                    <div class="post-grids">
                        <div class="col-md-4 post-left">
                            <a href="single.html"><img src="/base/images/p1.jpg" alt="" /></a>
                        </div>
                        <div class="col-md-8 post-right">
                            <h4><a href="single.html">Linux上安装php扩展zip	</a></h4>
                            <p class="comments">6 4 2010, <a href="#">8 阅读</a></p>
                            <p class="text">快速排序原理：在要排序的数字中取一个值，把大于这个这个值和小于这个值得数字分别放到数组里，在递归执行...</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                </div>
                <!-- //post -->
            </div>
            <!-- //banner-bottom-left -->
            <!-- banner-bottom-right -->
            <div class="col-md-4 banner-bottom-right">
                <div class="banner-bottom-left-grids">
                    <div class="search">
                        <form>
                            <input type="text" value="to search, type and hit enter" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'to search, type and hit enter';}" required="">
                        </form>
                    </div>
                    <div class="advertisement">
                        <h3>Advertisement</h3>
                        <p>300 x 250</p>
                    </div>
                    <div class="sponsors">
                        <h3>Sponsors</h3>
                        <div class="sponsors-grids">
                            <div class="sponsors-grid-left">
                                <div class="sponsors-grid">
                                    <p>125 x 125</p>
                                </div>
                            </div>
                            <div class="sponsors-grid-left">
                                <div class="sponsors-grid">
                                    <p>125 x 125</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="video">
                        <h3>Featured Video</h3>
                        <iframe src="https://player.vimeo.com/video/4717303" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                    <div class="twitter">
                        <h3>博主推荐</h3>
                        <div class="twitter-info">
                            <p>Linux上安装php扩展zip
                                <span class="time"><a href="#">31 minutes ago</a></span></p>
                        </div>
                        <div class="twitter-info">
                            <p>Linux上安装php扩展zip
                        </div>
                        <div class="twitter-info">
                            <p>Linux上安装php扩展zip
                                <span class="time"><a href="#">31 minutes ago</a></span></p>
                        </div>
                        <div class="twitter-info">
                            <p>Linux上安装php扩展zip
                                <span class="time"><a href="#">31 minutes ago</a></span></p>
                        </div>
                    </div>
                    <div class="recent-posts">
                        <h3>点击排行</h3>
                        <ul>
                            <li><a href="#">Linux上安装php扩展zip</a></li>
                            <li><a href="#">Linux上安装php扩展zip</a></li>
                            <li><a href="#">Linux上安装php扩展zip</a></li>
                            <li><a href="#">Linux上安装php扩展zips</a></li>
                            <li><a href="#">Linux上安装php扩展zip</a></li>
                    </div>
                </div>
            </div>
            <!-- banner-bottom-right -->
            <div class="clearfix"> </div>
            <div class="up-arrow">
                <a class="scroll" href="#home">Back to Top</a>
            </div>
        </div>
        <!-- //banner-bottom-grids -->
    </div>
@endsection
