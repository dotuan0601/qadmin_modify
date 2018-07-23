<!DOCTYPE html>
<!-- saved from url=(0021)https://anovafeed.vn/ -->
<html id="ctl00_Html1" lang="vi">
<head id="ctl00_Head1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        Trang chủ - Dv site
    </title>

    <meta property="og:title" content="Trang chủ">
    <meta property="og:site_name" content="Dv site">
    <meta itemprop="name" content="Trang chủ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/toolbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jquery.fancybox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/addons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/wow_book.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom_slideshow.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.mousewheel.min.js"></script>
</head>
<body id="ctl00_Body" class="canhcam homepage vi-vn">
    <div class="parallax-mirror" style="visibility: hidden; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 0px, 0px); height: 735px; width: 1440px;">
        <img class="parallax-slider" src="{{ asset('img/bg.jpg') }}" style="transform: translate3d(0px, 0px, 0px); position: absolute; left: -213px; height: 838px; width: 1867px; max-width: none;">
    </div>

        <script src="{{asset('other/homepage/ScriptResource.axd')}}" type="text/javascript"></script>

        <div class="fullpage">
            <header class="scroll-to-fixed-fixed" style="z-index: 1000; position: fixed; top: 0px; margin-left: 0px; width: 1440px; left: 200px;">
                <div class="overlay"></div>

                @include('frontend.search')

                <section class="headertop clearfix">
                    <div class="container">
                        <div class="btn-showmenu"><span></span></div>
                        <div class="sitelogo Module Module-135">
                            <div class="ModuleContent">
                                <a href="https://anovafeed.vn/"><img alt="" src="img/logo.png"></a>
                                <div class="text"><span style="font-size: 16px;">HIỆU QUẢ SỐ 1</span></div>
                            </div>
                        </div>
                        <div class="topmenu clearfix Module Module-138">
                            <div class="ModuleContent">
                                <ul class="toplink">
                                    <li class="active"><a href="http://www.anovacorp.vn/">Anova<br>
                                    Corp</a></li>
                                    <li> <a href="http://www.thanhnhon.com/">Thanh Nhon<br>
                                    CORP</a></li>
                                    <li> <a href="http://www.anovafeed.vn/">Anova<br>
                                    FEED</a></li>
                                    <li> <a href="http://www.anovafarm.vn/">Anova<br>
                                    Farm</a></li>
                                    <li> <a href="http://www.biopharmachemie.com/">Bio<br>
                                    Pharmachemie</a></li>
                                    <li> <a href="http://www.anova.com.vn/">Anova<br>
                                    JV</a></li>
                                    <li> <a href="http://www.anovapharma.com/">Anova<br>
                                    Pharma</a></li>
                                    <li> <a href="http://www.anovatrade-corp.com/">Anova<br>
                                    Trade</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tool clearfix">
                            <div class="language Module Module-136"></div>
                            <div class="searchtoggle"><i class="fa fa-search" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </section>

                @include('topmenu')

            </header>
            <div style="display: block; width: 1440px; height: 130px; float: none;"></div>
            <main>
                <div id="ctl00_divAlt1" class="altcontent1 cmszone"></div>


                <div id="ctl00_divAlt1" class="altcontent1 cmszone">

                    @include('homepage.slideshow')

                    @include('homepage.products')

                    @include('homepage.news')

                    @include('homepage.imgact')

                    @include('homepage.company')

                </div>
            </main>

		@include('footer')
        </div>
</body></html>