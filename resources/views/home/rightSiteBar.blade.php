@if($rightSiteBar_news)
<div class="single_leftbar wow fadeInDown">
<h2><span>Popular Post</span></h2>
@if($rightSiteBar_news['popular_news'])
    <div class="singleleft_inner">
        <ul class="catg3_snav ppost_nav wow fadeInDown">
            @foreach($rightSiteBar_news['popular_news'] as $news)
            <li>
                <div class="media"> <a href="{{ route('single',['id'=>$news->id]) }}" class="media-left"> <img alt="" src="{{ asset('storage/images/' . $news->img) }}" style="width: 70px; height: 60px"> </a>
                    <div class="media-body"> <a href="{{ route('single',['id'=>$news->id]) }}" class="catg_title">{{ $news->short_text }}</a></div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
@endif
</div>
<div class="single_leftbar wow fadeInDown">
    <h2><span>Side Ad</span></h2>
    <div class="singleleft_inner"> <a href="#"><img alt="" src="{{ asset('storage/images/262x218.jpg') }}"></a></div>
</div>
<div class="single_leftbar wow fadeInDown">
    <ul class="nav nav-tabs custom-tabs" role="tablist">
        <li role="presentation" class="active" style="float:left;margin-bottom:-1px;width:50%;text-align:center;"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Most Popular</a></li>
        <li role="presentation" style="float:left;margin-bottom:-1px;width:50%;text-align:center;"><a style='float:none;' href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Recent Comment</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade" id="profile">
            <ul class="catg3_snav ppost_nav wow fadeInDown">
                <li>
                    <div class="media"> <a class="media-left" href="#"> <img src="{{ asset('storage/images/70x70.jpg') }}" alt=""> </a>
                        <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
                <li>
                    <div class="media"> <a class="media-left" href="#"> <img src="{{ asset('storage/images/70x70.jpg') }}" alt=""> </a>
                        <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
                <li>
                    <div class="media"> <a class="media-left" href="#"> <img src="{{ asset('storage/images/70x70.jpg') }}" alt=""> </a>
                        <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
                <li>
                    <div class="media"> <a class="media-left" href="#"> <img src="{{ asset('storage/images/70x70.jpg') }}" alt=""> </a>
                        <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
                <li>
                    <div class="media"> <a class="media-left" href="#"> <img src="{{ asset('storage/images/70x70.jpg') }}" alt=""> </a>
                        <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
            </ul>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="messages">
            <ul class="catg3_snav ppost_nav wow fadeInDown">
                <li>
                    <div class="media"> <a class="media-left" href="#"> <img src="{{ asset('storage/images/70x70.jpg') }}" alt=""> </a>
                        <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
                <li>
                    <div class="media"> <a class="media-left" href="#"> <img src="{{ asset('storage/images/70x70.jpg') }}" alt=""> </a>
                        <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
                <li>
                    <div class="media"> <a class="media-left" href="#"> <img src="{{ asset('storage/images/70x70.jpg') }}" alt=""> </a>
                        <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
                <li>
                    <div class="media"> <a class="media-left" href="#"> <img src="{{ asset('storage/images/70x70.jpg') }}" alt=""> </a>
                        <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
                <li>
                    <div class="media"> <a class="media-left" href="#"> <img src="{{ asset('storage/images/70x70.jpg') }}" alt=""> </a>
                        <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
                <li>
                    <div class="media"> <a class="media-left" href="#"> <img src="{{ asset('storage/images/70x70.jpg') }}" alt=""> </a>
                        <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
                <li>
                    <div class="media"> <a class="media-left" href="#"> <img src="{{ asset('storage/images/70x70.jpg') }}" alt=""> </a>
                        <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="single_leftbar wow fadeInDown">
    <h2><span>Blog Archive</span></h2>
    <div class="singleleft_inner">
        <div class="blog_archive">
            <form action="#">
                <select>
                    <option value="">Blog Archive</option>
                    <option value="">October(20)</option>
                </select>
            </form>
        </div>
    </div>
</div>
@if($categories)
<div class="single_leftbar wow fadeInDown">
    <h2><span>Categories</span></h2>
    <div class="singleleft_inner">
        <ul class="label_nav">
            @foreach($categories as $category)
                <li><a href="{{ route('archive',['name'=>$category->name]) }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endif
<div class="single_leftbar wow fadeInDown">
    <h2><span>Links</span></h2>
    <div class="singleleft_inner">
        <ul class="link_nav">
            <li><a href="#">Blog Home</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Error Page</a></li>
            <li><a href="#">Wpfreeware</a></li>
            <li><a href="#">Facebook Account</a></li>
        </ul>
    </div>
</div>
@endif