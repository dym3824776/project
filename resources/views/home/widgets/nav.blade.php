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
        <li class="dropdown1 cur"><a href="/">首页</a></li>

        @foreach($nav as $item)
            <li class="dropdown1"><a class="top" href="{{ $item['folder'] }}" >{{ $item['name'] }}</a>
                @if(isset($item['_child']))
                <ul class="dropdown2">
                    @foreach($item['_child'] as $value)
                        <li class="cur"><a href=" {{ $item['folder'] }} ">{{ $value['name'] }}</a></li>
                    @endforeach
                </ul>
                @endif
            </li>
        @endforeach
    </ul>
    <script>
        $("span.menu").click(function(){
            $(" ul.nav").slideToggle("slow" , function(){
            });
        });
    </script>
</div>