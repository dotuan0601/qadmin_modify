<!DOCTYPE html>
<!-- saved from url=(0033)https://www.anovafeed.vn/hinh-anh -->
<html id="ctl00_Html1" lang="vi"><head id="ctl00_Head1"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>
        Hình ảnh - ANOVA FEED
    </title>

    <meta property="og:title" content="Hình ảnh">
    <meta property="og:site_name" content="ANOVA FEED">
    <meta itemprop="name" content="Hình ảnh">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/toolbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/addons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/wow_book.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/facebook.css')}}">
    <link rel="shortcut icon" href="https://www.anovafeed.vn/Data/Sites/1/skins/default/favicon.ico">
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script><!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
</head>
<body id="ctl00_Body" class="canhcam vi-vn">
    <script src="{{ asset('other/ScriptResource.axd') }}" type="text/javascript"></script>


    <div class="fullpage">
        <header class="minimal scroll-to-fixed-fixed" style="z-index: 1000; position: fixed; top: 0px; margin-left: 0px; width: 1440px; left: 200px;">
            <div class="overlay"></div>
            <div class="search clearfix">
                <div class="container">
                    <div class="searchwrap">
                        <div class="Module Module-137"><div id="ctl00_mdl137_ctl00_Search_pnlSearch" class="searchbox">

                                <input name="ctl00$mdl137$ctl00$Search$txtSearch" type="text" id="ctl00_mdl137_ctl00_Search_txtSearch" title="Tìm kiếm" class="searchinput" autocomplete="off" placeholder="Tìm kiếm...">

                                <button id="ctl00_mdl137_ctl00_Search_btnSearch" class="searchbutton">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>

                            </div></div>
                        <div class="btn-closesearch"><span class="lnr lnr-cross"></span></div>
                    </div>
                </div>
            </div>
            <section class="headertop clearfix">
                <div class="container">
                    <div class="btn-showmenu"><span></span></div>
                    <div class="sitelogo Module Module-135"><div class="ModuleContent"><a href="https://www.anovafeed.vn/"><img alt="" src="{{ asset('img/logo.png') }}"></a>
                            <div class="text"><span style="font-size: 16px;">HIỆU QUẢ SỐ 1</span></div></div></div>
                    <div class="topmenu clearfix Module Module-138"><div class="ModuleContent"><ul class="toplink">
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
                                <!--<li> <a href="http://www.anovabiotech.vn/">Anova<br />
                                Biotech</a></li>-->
                            </ul></div></div>
                    <div class="tool clearfix">
                        <div class="language Module Module-136"></div>
                        <div class="searchtoggle"><i class="fa fa-search" aria-hidden="true"></i></div>
                    </div>
                </div>
            </section>
            <section class="headerbottom clearfix">
                <div class="container">

                    @include('topmenu')

                    <div class="tool clearfix">
                        <div class="searchtoggle"><i class="fa fa-search" aria-hidden="true"></i></div>
                        <div class="language Module Module-136"></div>
                    </div>
                </div>
            </section>
        </header><div style="display: block; width: 1440px; height: 130px; float: none;"></div>
        <main>
            <div id="ctl00_divAlt1" class="altcontent1 cmszone">


                @include('breadcum')

            </div>
            <div class="container">
                <section class="row flex flex-wrap">

                    <div id="ctl00_divCenter" class="col-xs-12 middle-fullwidth">

                        <div class="Module Module-167">
                            <div class="ModuleContent">
                                <div class="news-page clearfix">
                                    <h1 class="pagetitle">Hình ảnh</h1>
                                    <div class="newslist newslist3 clearfix">
                                        <div class="row flex flex-wrap">
                                            @foreach($img_acts as $img_act)
                                                <article class="col-xs-12 col-sm-6 col-md-3">
                                                    <div class="newscol picture">
                                                        <figure>
                                                            <a class="newsimg" data-fancybox="group1" href="{{ URL('uploads/' . $img_act->img_large) }}" title="{{ $img_act->img_title }}">
                                                                <img src="{{ asset('uploads/' . $img_act->img_large) }}" alt="{{ $img_act->img_title }}">
                                                            </a>
                                                            <figcaption>
                                                                <h1 class="newsname">{{ $img_act->img_title }}</h1>
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                </article>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>
            </div></main>

        @include('footer')
    </div>


</body></html>