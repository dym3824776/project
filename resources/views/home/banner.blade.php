<div class="banner-bottom-left-grids">
    @foreach($data as $k =>$item)
    <div class="col-md-6 banner-left-grid">
        <h3>{{$k}}</h3>
        <a href="single.html"><img src="/base/images/b1.jpg" alt="" /></a>
        <h4><a href="single.html">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
        <p class="comments">August 4 2015, <a href="#">8 Comments</a></p>
        <p class="text">Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur...</p>
        <div class="blog-grids">
            <div class="blog-grid-left">
                <img src="/base/images/b6.jpg" alt="" />
            </div>
            <div class="blog-grid-right">
                <a href="single.html">Fly Fishers Serving as Transports for Noxious Little Invaders</a>
                <p class="comments">August 4 2015, <a href="#">8 Comments</a></p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="blog-grids">
            <div class="blog-grid-left">
                <img src="/base/images/b5.jpg" alt="" />
            </div>
            <div class="blog-grid-right">
                <a href="single.html">Fly Fishers Serving as Transports for Noxious Little Invaders</a>
                <p class="comments">August 4 2015, <a href="#">8 Comments</a></p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    @endforeach
    <div class="clearfix"> </div>
</div>
