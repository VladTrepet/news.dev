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

@yield('header')
@yield('content')
@yield('footer')


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
</body>
</html>