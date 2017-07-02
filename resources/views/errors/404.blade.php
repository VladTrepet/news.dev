<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SybarMagazine</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- for fontawesome icon css file -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- for content animate css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- google fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Metal+Mania' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <!-- for news ticker css file -->
    <link href="{{ asset('assets/css/li-scroller.css') }}" rel="stylesheet">
    <!-- slick slider css file -->
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <!-- website theme file -->
    <!-- <link href="css/theme-red.css" rel="stylesheet"> -->
    <!-- <link href="css/theme-yellow.css" rel="stylesheet"> -->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">
    <!-- main site css file -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- End Preloader -->

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

<div class="container">
    <div class="box_wrapper">
        <!-- ==================start header=============== -->
        <header id="header">
            <!-- start header top area -->
            <div class="header_top">
                <!-- Static navbar -->
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav custom_nav">
                                <li class="{{ route('index') }}"><a href="index.html">Home</a></li>
                                <li><a href="#">Archive</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>
                <div class="header_search">
                    <button id="searchIcon"><i class="fa fa-search"></i></button>
                    <!-- <a id="searchIcon" href="#"><i class="fa fa-search"></i></a> -->
                    <div id="shide">
                        <div id="search-hide">
                            <form>
                                <input type="text" size="40" placeholder="Search here ...">
                            </form>
                            <button class="remove"><span><i class="fa fa-times"></i></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End header top area -->

            <!-- start header bottom area -->
            <div class="header_bottom">
                <div class="logo_area">
                    <!-- for your image logo -->
                    <a class="logo" href="index.html">
                        <img src="{{ asset('assets/img/logo.jpg') }}" alt="logo">
                    </a>

                    <!-- for your text logo -->
                    <!--  <a class="logo" href="#">
                     <b>S</b>ybar Magazine
                     <span>A Pro Magazine Theme</span>
                     </a> -->
                </div>
                <div class="top_addarea">
                    <a href="#"><img src="{{ asset('assets/img/addbanner_728x90_V1.jpg') }}" alt="img"></a>
                </div>
            </div>
            <!-- start header top area -->
        </header>
        <!-- ==================End header=============== -->

        <!-- ==================start content body section=============== -->
        <section id="errorpage_body">
            <div class="row">
                <!-- start left bar content -->
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="errorpage_area">
                        <div class="error-title"><span>404</span></div>
                        <div class="error_content">
                            <p><i class="fa fa-hand-o-right "></i> Sorry, the page you were looking for in this blog does not exist.</p>
                            <a href="{{ route('index') }}">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================End content body section=============== -->

    </div><!-- /.box_wrapper -->
</div><!-- /.container -->
<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- For content animatin  -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- bootstrap js file -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- slick slider js file -->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- news ticker jquery file -->
<script src="{{ asset('assets/js/jquery.li-scroller.1.0.js') }}"></script>
<!-- custom js file include -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- =========================
      //////////////This Theme Design and Developed //////////////////////
      //////////// by www.wpfreeware.com======================-->


</body>
</html>