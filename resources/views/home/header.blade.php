<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
    <div class="box_wrapper">
        <header id="header">
            <div class="header_top">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav custom_nav">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="">Archive</a></li>
                                <li><a href="#footer">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="header_search">
                    <button id="searchIcon"><i class="fa fa-search"></i></button>
                    <div id="shide">
                        <div id="search-hide">
                            <form action="#">
                                <input type="text" size="40" placeholder="Search here ...">
                            </form>
                            <button class="remove"><span><i class="fa fa-times"></i></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="logo_area"><a class="logo" href="{{ route('index') }}"><b>S</b>ybarMagazine <span>A Pro Magazine Theme</span></a></div>
                <div class="top_addarea"><a href="#"><img src="{{ asset('storage/images/addbanner_728x90_V1.jpg') }}" alt=""></a></div>
            </div>
        </header>
        <div class="latest_newsarea"> <span>Latest News</span>
            @if($header_news['popular_news'])
            <ul id="ticker01" class="news_sticker">
                @foreach($header_news['popular_news'] as $news)
                    <li><a href="{{ route('single',['id'=>$news->id]) }}">{{ $news->short_text }}</a></li>
                @endforeach
            </ul>
            @endif
        </div>
        <div class="thumbnail_slider_area">
            @if($header_news['slider_news'])
                <div class="owl-carousel">
                        @foreach($header_news['slider_news'] as $news)
                                <div class="signle_iteam"> <img src="{{ asset('storage/images/' . $news->img) }}" alt="">
                                    <div class="sing_commentbox slider_comntbox">
                                        <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                                    <a class="slider_tittle" href="{{ route('single',['id'=>$news->id]) }}">{{ $news->short_text }}</a></div>
                        @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
