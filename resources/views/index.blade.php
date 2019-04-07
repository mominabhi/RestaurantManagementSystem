<!DOCTYPE html>
<html lang="en">
<head>
    <title>Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{asset('asset/css/reset.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('asset/css/layout.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('asset/css/zerogrid.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('asset/css/responsiveslides.css')}}" />
    <script type="text/javascript" src="{{asset('asset/js/jquery-1.6.js')}}" ></script>
    <script type="text/javascript" src="{{asset('asset/js/cufon-yui.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/cufon-replace.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/Forum_400.font.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/s/jquery.easing.1.3.js')}}j"></script>
    <script type="text/javascript" src="{{asset('asset/js/tms-0.3.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/tms_presets.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/script.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/atooltip.jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/css3-mediaqueries.js')}}"></script>
    <script src="{{asset('asset/js/responsiveslides.js')}}"></script>
    {{--<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>--}}
    {{--<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">--}}
    <script>
        $(function () {
            $("#slidez").responsiveSlides({
                auto: true,
                pager: false,
                nav: true,
                speed: 500,
                maxwidth: 960,
                namespace: "centered-btns"
            });
        });
    </script>
</head>
<body id="page1">
<div class="body6">
    <div class="body1">
        <div class="body5">
            <div class="main zerogrid" >
                <!-- header -->
                <header>
                    <h1><a href="{{url('/')}}" id="logo"><img src="{{asset('asset/images/logo.png')}}"/></a></h1>
                    <nav>
                        <ul id="top_nav">
                            <li><a href="{{url('/')}}"><img src="{{asset('asset/images/icon_1.gif')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('asset/images/icon_2.gif')}}" alt=""></a></li>
                            <li class="end"><a href="#"><img src="{{asset('asset/images/icon_3.gif')}}" alt=""></a></li>
                        </ul>
                    </nav>
                    <nav>
                        <ul id="menu">
                            <li class="active"><a href="{{url('/')}}">Restaurant</a></li>
                            <li><a href="{{url('/cuisine')}}">Cuisine</a></li>
                            <li><a href="#">Wine List</a></li>
                            <li><a href="#">CookBook</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </nav>
                </header>
                <!-- / header -->
                <!-- content -->

                <article id="content" >
                  @yield('slider')
                  @yield('wrap')
                </article>
            </div>
        </div>
    </div>
</div>
<div class="body2">
    <div class="main zerogrid">
        <article id="content2">
            @yield('wrapper')
        </article>
        <!-- / content -->
    </div>
</div>
<div class="body3">
    <div class="main zerogrid">
        <!-- footer -->
        @yield('footer')
        <!-- / footer -->
    </div>
</div>
</body>
</html>
