@if($leftSiteBar_news)
    <div class="row">
        <div class="left_bar">
            @if($leftSiteBar_news['recent_news'])
                <div class="single_leftbar">
                    <h2><span>Recent Post</span></h2>
                    <div class="singleleft_inner">
                        <ul class="recentpost_nav wow fadeInDown">
                            @foreach($leftSiteBar_news['recent_news'] as $news)
                                <li><a href="{{ route('single',['id'=>$news->id]) }}"><img src="{{ asset('storage/images/' . $news->img) }}" alt=""></a> <a class="recent_title" href="{{ route('single',['id'=>$news->id]) }}">{{ $news->short_text }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <div class="single_leftbar wow fadeInDown">
                <h2><span>Side Add</span></h2>
                <div class="singleleft_inner"> <a href="#"><img src="{{ asset('storage/images/150x600.jpg') }}" alt=""></a></div>
            </div>
        </div>
    </div>
@endif