<section id="contentbody">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
        @include('home.leftSiteBar')
    </div>
<div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
    <div class="row">
        <div class="middle_bar">
            <!-- start single post area -->
            <div class="single_post_area">
                <ol class="breadcrumb">
                    <li><a href="{{ route('index') }}"><i class="fa fa-home"></i>Home<i class="fa fa-angle-right"></i></a></li>
                    <li><a href="{{ route('archive',['name'=>$news->category]) }}">{{ $news->category }}<i class="fa fa-angle-right"></i></a></li>
                    <li class="active">{{ $news->short_text }}</li>
                </ol>
                <h2 class="post_title wow ">{{ $news->short_text }} </h2>
                <a href="#" class="author_name"><i class="fa fa-user"></i>{{ $news->author }}</a>
                <a href="#" class="post_date"><i class="fa fa-clock-o"></i>{{ $news->created_at->toFormattedDateString() }}</a>
                <div class="single_post_content">
                    @markdown($news->text )
                    <img class="img-center" src="{{ asset('storage/images/' . $news->img) }}" alt="img" style="width:600px; height: 300px;">
                </div>
                <div class="post_footer">
                    <ul class="post_pager">
                        <li class="previous wow fadeInLeftBig">
                            <a href="">
                                <p><i class="fa fa-hand-o-left"></i><strong>Previous</strong></p>
                                <span>The best of Sony in a compact waterproof smartphone</span>
                            </a>
                        </li>
                        <li class="next wow fadeInRightBig">
                            <a href="">
                                <p><i class="fa fa-hand-o-right"></i><strong>Next</strong></p>
                                <span>Proin vel arcu sed nibh faucibus porta non et nibh</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="social_area wow fadeInLeft">
                    <ul>
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                    </ul>
                </div>
                <div class="related_post">
                    <h2 class="wow fadeInLeftBig">Related Posts you may like <i class="fa fa-thumbs-o-up"></i></h2>
                    <ul class="recentpost_nav relatedpost_nav wow fadeInDown animated">
                        <li>
                            <a href="#"><img alt="img" src="http://lorempixel.com/150/80/"></a>
                            <a href="#" class="recent_title"> Curabitur ac dictum nisl eu hendrerit ante</a>
                        </li>
                        <li>
                            <a href="#"><img alt="img" src="http://lorempixel.com/150/80/"></a>
                            <a href="#" class="recent_title"> Curabitur ac dictum nisl eu hendrerit ante</a>
                        </li>
                        <li>
                            <a href="#"><img alt="img" src="http://lorempixel.com/150/80/"></a>
                            <a href="#" class="recent_title"> Curabitur ac dictum nisl eu hendrerit ante</a>
                        </li>
                    </ul>
                </div>
            </div><!-- End single post area -->
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