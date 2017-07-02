<footer id="footer">
    <div class="footer_top">
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="single_footer_top wow fadeInLeft">
                <h2>Follow By Email</h2>
                <div class="subscribe_area">
                    <p>"Subscribe here to get our newsletter, it is safe just Put your Email and click subscribe"</p>
                    <form action="#">
                        <div class="subscribe_mail">
                            <input class="form-control" type="email" placeholder="Email Address">
                            <i class="fa fa-envelope"></i></div>
                        <input class="submit_btn" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="single_footer_top wow fadeInLeft">
                <h2>Popular Post</h2>
                <ul class="catg3_snav ppost_nav">
                    @foreach($footer_news['popular_news'] as $news)
                    <li>
                        <div class="media"> <a class="media-left" href="{{ route('single',['id'=>$news->id]) }}"> <img src="{{ asset('storage/images/' . $news->img) }}" alt="" style="width: 70px; height: 60px"> </a>
                            <div class="media-body"> <a class="catg_title" href="{{ route('single',['id'=>$news->id]) }}">{{ $news->short_text }}</a></div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            @if($categories)
            <div class="single_footer_top wow fadeInRight">
                <h2>Labels</h2>
                <ul class="footer_labels">
                    @foreach($categories as $category)
                        <li><a href="{{ route('archive',['name'=>$category->name]) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="single_footer_top wow fadeInRight" id="footer">
                @if(count($errors)>0)
                        <ul>
                            @foreach($errors->all() as $error)
                                <li style="color:#e54a00">{{ $error }}</li>
                            @endforeach
                        </ul>
                @endif
                <h2>Contact Form</h2>
                {{ Form::open(['url'=>route('contact'),'class'=>'contact_form']) }}
                    {{ Form::label('name') }}
                    {{ Form::text('name',null,['class'=>'form-control']) }}
                    {{ Form::label('email') }}
                    {{ Form::email('email',null,['class'=>'form-control']) }}
                    {{ Form::label('message') }}
                    {{ Form::textarea('message',null,['class'=>'form-control','cols'=>30,'rows'=>10]) }}
                    {{ Form::submit('Send',['class'=>'send_btn']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="footer_bottom_left">
            <p>Copyright &copy; 2045</p>
        </div>
        <div class="footer_bottom_right">
            <ul>
                <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Googel+" href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Rss" href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
        </div>
    </div>
</footer>