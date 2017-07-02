@if($content_news)
<section id="contentbody">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
            @include('home.leftSiteBar')
        </div>
        <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
            <div class="row">
                <div class="middle_bar">
                    <div class="featured_sliderarea">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach($content_news['week_news'] as $k=>$news)
                                    @if($k == 0)
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    @else
                                        <li data-target="#myCarousel" data-slide-to="{{ $k }}"></li>
                                    @endif
                                @endforeach
                            </ol>
                <div class="carousel-inner" role="listbox">
                    @foreach($content_news['week_news'] as $k=>$news)
                        <div class="item {{ $k == 0 ? 'active' : '' }}"><img src="{{ asset('storage/images/' . $news->img) }}" alt="" style="width: 668px; height: 328px;">
                                <div class="carousel-caption">
                                    <h1><a href="{{ route('single',['id'=>$news->id]) }}">{{ $news->short_text }}</a></h1>
                                </div>
                            </div>
                    @endforeach
                </div>
        <a class="left left_slide" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> </a> <a class="right right_slide" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> </a></div>
        </div>
@if($content_news['culture_news'])
        <div class="single_category wow fadeInDown">
        <div class="category_title"> <a href="pages/category-archive.html">Culture</a></div>
        <div class="single_category_inner">
        <ul class="catg_nav">
    @foreach($content_news['culture_news'] as $news)
        <li>
            <div class="catgimg_container"> <a class="catg1_img" href="{{ route('single',['id'=>$news->id]) }}"> <img src="{{ asset('storage/images/' . $news->img) }}" alt=""> </a></div>
            <a class="catg_title" href="{{ route('single',['id'=>$news->id]) }}">{{ $news->short_text }}</a>
            <div class="sing_commentbox">
                <p><i class="fa fa-calendar"></i>{{ $news->created_at->toFormattedDateString() }}</p>
                <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
        </li>
    @endforeach
</ul>
</div>
</div>
@endif
@if($content_news['science_news'])
<div class="single_category  wow fadeInDown">
<div class="category_title"> <a href="#">Science</a></div>
<div class="single_category_inner">
<ul class="catg_nav catg_nav2">
    @foreach($content_news['science_news'] as $news)
    <li>
        <div class="catgimg_container"> <a class="catg1_img" href="{{ route('single',['id'=>$news->id]) }}"> <img src="{{ asset('storage/images/' . $news->img) }}" alt=""> </a></div>
        <a class="catg_title" href="{{ route('single',['id'=>$news->id]) }}">{{ $news->short_text }}</a>
        <div class="sing_commentbox">
            <p><i class="fa fa-calendar"></i>{{ $news->created_at->toFormattedDateString() }}</p>
            <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
        <p class="post-summary">{{ substr($news->text,0,100) }}...</p>
    </li>
     @endforeach
</ul>
</div>
</div>
@endif
<div class="category_three_fourarea  wow fadeInDown">
<div class="category_three">
@if($content_news['politics_news'])
<div class="single_category">
    <div class="category_title"> <a href="">Politics</a></div>
    <div class="single_category_inner">
        @if($content_news['politics_news']->first())
        <ul class="catg_nav catg_nav3">
            <li>
                <div class="catgimg_container"> <a class="catg1_img" href="{{ route('single',['id'=>$content_news['politics_news']->first()->id]) }}"> <img src="{{ asset('storage/images/' . $content_news['politics_news']->first()->img) }}" alt=""> </a></div>
                <a class="catg_title" href="{{ route('single',['id'=>$content_news['politics_news']->first()->id]) }}">{{ $content_news['politics_news']->first()->short_text }}</a>
                <div class="sing_commentbox">
                    <p><i class="fa fa-calendar"></i>{{ $content_news['politics_news']->first()->created_at->toFormattedDateString() }}</p>
                    <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                <p class="post-summary">{{ substr($content_news['politics_news']->shift()->text,0,100) }}...</p>
            </li>
        </ul>
        @endif
        <div class="catg3_bottompost wow fadeInDown">
            <ul class="catg3_snav">
                @foreach($content_news['politics_news'] as $news)
                <li>
                    <div class="media"> <a class="media-left" href="{{ route('single',['id'=>$news->id]) }}"> <img src="{{ asset('storage/images/' . $news->img) }}" alt=""> </a>
                        <div class="media-body"> <a class="catg_title" href="{{ route('single',['id'=>$news->id]) }}">{{ $news->short_text }}</a>
                            <div class="sing_commentbox">
                                <p><i class="fa fa-calendar"></i>{{ $news->created_at->toFormattedDateString() }}</p>
                                <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif
</div>
<div class="category_four wow fadeInDown">
@if($content_news['sport_news'])
<div class="single_category">
    <div class="category_title"> <a href="#">Sport</a></div>
    <div class="single_category_inner">
        @if($content_news['sport_news']->first())
        <ul class="catg_nav catg_nav3">
            <li>
                <div class="catgimg_container"> <a class="catg1_img" href="{{ route('single',['id'=>$content_news['sport_news']->first()->id]) }}"> <img src="{{ asset('storage/images/' . $content_news['sport_news']->first()->img) }}" alt=""> </a></div>
                <a class="catg_title" href="{{ route('single',['id'=>$content_news['sport_news']->first()->id]) }}">{{ $content_news['sport_news']->first()->short_text }}</a>
                <div class="sing_commentbox">
                    <p><i class="fa fa-calendar"></i>{{ $content_news['sport_news']->first()->created_at->toFormattedDateString() }}</p>
                    <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                <p class="post-summary">{{ substr($content_news['sport_news']->shift()->text,0,100) }}...</p>
            </li>
        </ul>
        @endif
        <div class="catg3_bottompost wow fadeInDown">
            <ul class="catg3_snav">
                @foreach($content_news['sport_news'] as $news)
                <li>
                    <div class="media"> <a class="media-left" href="{{ route('single',['id'=>$news->id]) }}"> <img src="{{ asset('storage/images/' . $news->img) }}" alt=""> </a>
                        <div class="media-body"> <a class="catg_title" href="#">{{ $news->short_text }}</a>
                            <div class="sing_commentbox">
                                <p><i class="fa fa-calendar"></i>{{ $news->created_at->toFormattedDateString()}}</p>
                                <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif
</div>
</div>
@if($content_news['other_news'])
<div class="single_category wow fadeInDown">
<div class="category_title"> <a href="#">Other</a></div>
<div class="single_category_inner">
<ul class="catg3_snav catg5_nav">
    @foreach($content_news['other_news'] as $news)
        <li>
            <div class="media"> <a href="{{ route('single',['id'=>$news->id]) }}" class="media-left"> <img alt="" src="{{ asset('storage/images/' . $news->img) }}"> </a>
                <div class="media-body"> <a href="{{ route('single',['id'=>$news->id]) }}" class="catg_title">{{ $news->short_text }}</a>
                    <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i>{{ $news->created_at->toFormattedDateString() }}</p>
                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                </div>
            </div>
        </li>
    @endforeach
</ul>

</div>
</div>
@endif
</div>
</div>
</div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="row">
                <div class="right_bar">
                    @include('home.rightSiteBar')
                </div>
            </div>
        </div>
    </div>
</section>
@endif