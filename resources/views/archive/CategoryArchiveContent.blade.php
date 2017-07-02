<section id="contentbody">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
        @include('home.leftSiteBar')
    </div>
    <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
        <div class="row">
            <div class="middle_bar">
                @if($category_news)
                <!-- start category archive area -->
                <div class="category_archive_area">
                    @foreach($category_news as $news)
                        <div class="single_archive wow fadeInDown">
                            <a href="{{ route('single',['id'=>$news->id]) }}"><img src="{{ asset('storage/images/' . $news->img) }}" alt="img" style="width: 650px; height: 310px;"></a>
                            <a href="{{ route('single',['id'=>$news->id]) }}" class="read_more">Read More <i class="fa fa-angle-double-right"></i></a>
                            <div class="singlearcive_article">
                                <h2><a href="{{ route('single',['id'=>$news->id]) }}">{{ $news->short_text }}</a></h2>
                                <a class="author_name" href="#"><i class="fa fa-user"></i>{{ $news->author }}</a>
                                <a class="post_date" href="#"><i class="fa  fa-clock-o"></i>{{ $news->created_at->toFormattedDateString() }}</a>
                                <p>{{ substr($news->text,0,100) }}...</p>
                            </div>
                        </div>
                    @endforeach
                </div><!-- End category archive area -->
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
</section>