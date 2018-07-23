<!DOCTYPE html>
<html id="ctl00_Html1" lang="vi" class=""><head id="ctl00_Head1"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>
        Giới thiệu - ANOVA FEED
    </title>

    <meta property="og:title" content="Giới thiệu">
    <meta property="og:site_name" content="ANOVA FEED">
    <meta itemprop="name" content="Giới thiệu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <link rel="stylesheet" type="text/css" href="css/about/toolbar.css">
    <link rel="stylesheet" type="text/css" href="css/about/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="css/about/addons.css">
    <link rel="stylesheet" type="text/css" href="css/about/wow_book.css">
    <link rel="stylesheet" type="text/css" href="css/about/main.css">
    <link rel="shortcut icon" href="https://anovafeed.vn/Data/Sites/1/skins/default/favicon.ico">
    <script type="text/javascript" async="" src="js/about/analytics.js">

    </script><script src="js/about/jquery.min.js" type="text/javascript"></script>

    <script src="js/about/jquery.mousewheel.min.js"></script></head>
<body id="ctl00_Body" class="canhcam aboutpage vi-vn">
<div class="parallax-mirror" style="visibility: hidden; z-index: -100; position: fixed; top: 888px; left: 200px; overflow: hidden; transform: translate3d(0px, 0px, 0px); height: 430px; width: 1440px;">
    <img class="parallax-slider" src="{{ asset('img/aboutbg.jpg') }}" style="transform: translate3d(0px, 0px, 0px); position: absolute; left: 0px; height: 900px; width: 1440px; max-width: none; top: -539px;">
</div>


<form method="post" action="https://anovafeed.vn/{{$current_slug}}" id="aspnetForm">
    <div class="aspNetHidden">
        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
        <input type="hidden" name="__VIEWSTATEFIELDCOUNT" id="__VIEWSTATEFIELDCOUNT" value="2">
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTk3NjY2MTIwNw9kFgJmD2QWAgIBDxYCHgRsYW5nBQJ2aRYCAgMPFgIeBWNsYXNzBRdjYW5oY2FtIGFib3V0cGFnZSB2aS12bhYCAgUPZBYOAgkPZBYCZg9kFgJmD2QWAmYPD2QWAh4Ic2l0ZXJvb3QFFGh0dHBzOi8vYW5vdmFmZWVkLnZuFgQCAQ8PFgYeB1Rvb2xUaXAFC1TDrG0ga2nhur9tHghDc3NDbGFzcwULc2VhcmNoaW5wdXQeBF8hU0ICAhYEHgxhdXRvY29tcGxldGUFA29mZh4LcGxhY2Vob2xkZXIFDlTDrG0ga2nhur9tLi4uZAIFDxYCHwEFDHNlYXJjaGJ1dHRvbmQCGQ8PFgQfBAUTYWx0Y29udGVudDEgY21zem9uZR8FAgJkZAIbDw8WBh8EBRBsZWZ0c2lkZSBjbXN6b25lHwUCAh4HVmlzaWJsZWhkZAIdDw8WBB8EBRpjb2wteHMtMTIgbWlk">
        <input type="hidden" name="__VIEWSTATE1" id="__VIEWSTATE1" value="ZGxlLWZ1bGx3aWR0aB8FAgJkZAIfDw8WBh8EBRFyaWdodHNpZGUgY21zem9uZR8FAgIfCGhkZAIhDw8WBh8EBRNhbHRjb250ZW50MiBjbXN6b25lHwUCAh8IaGRkAikPDxYCHwhoZGRkvESSIFQRe4K78+Ld95phf7iNRbM=">
    </div>


    <script src="{{asset('other/homepage/ScriptResource.axd')}}" type="text/javascript"></script>


    <div class="fullpage">
        <header class="scroll-to-fixed-fixed" style="z-index: 1000; position: fixed; top: 0px; margin-left: 0px; width: 1440px; left: 200px;">
            <div class="overlay"></div>
            <div class="search clearfix">
                <div class="container">
                    <div class="searchwrap">
                        <div class="Module Module-137"><div id="ctl00_mdl137_ctl00_Search_pnlSearch" class="searchbox">

                                <input onfocus="javascript:watermarkEnter(this, &#39;&#39;);" onblur="javascript:watermarkLeave(this, &#39;&#39;);" name="ctl00$mdl137$ctl00$Search$txtSearch" type="text" id="ctl00_mdl137_ctl00_Search_txtSearch" title="Tìm kiếm" class="searchinput" autocomplete="off" placeholder="Tìm kiếm...">

                                <button onclick="__doPostBack(&#39;ctl00$mdl137$ctl00$Search$btnSearch&#39;,&#39;&#39;)" id="ctl00_mdl137_ctl00_Search_btnSearch" class="searchbutton">
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
                    <div class="sitelogo Module Module-135"><div class="ModuleContent"><a href="https://anovafeed.vn/"><img alt="" src="img/logo.png"></a>
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

                </div>
            </section>

        </header><div style="display: block; width: 1440px; height: 130px; float: none;"></div>
        <main>
            <div id="ctl00_divAlt1" class="altcontent1 cmszone">


                @include('breadcum')

                <div class="Module Module-172"><div class="ModuleContent">
                        <section class="topbar clearfix" style="z-index: auto; position: static; top: auto;">
                            <div class="container">
    <span class="toggle hidden-xl-up">
          Menu
           <i class="fa fa-bars" aria-hidden="true"></i></span>
                                <nav class="topbar-category clearfix">
                                    <ul>
                                        @php
                                            $cat_index_active = 0;
                                        @endphp
                                        @foreach($cats as $k => $cat)
                                            @if($k == $cat_index_active)
                                                <li class="active">
                                                    <a href="#{{$cat->slug}}" target="_self">{{$cat->name}}</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="#{{$cat->slug}}" target="_self">{{$cat->name}}</a>
                                                </li>
                                            @endif

                                        @endforeach

                                        <li class="">
                                            <a href="#part-chung-chi" target="_self">Thành tựu - Giải thưởng</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </section>
                        <div style="display: none; width: 1440px; height: 40px; float: none;"></div>
                        @foreach($contents as $content)
                            <section id="{{$content->slug}}" {!! $content->block_option !!}>
                                {!! $content->content !!}
                            </section>
                        @endforeach
                        

            </div>


            <div class="container">
                <section class="row flex flex-wrap">

                    <div id="ctl00_divCenter" class="col-xs-12 middle-fullwidth">

                        <section id="part-6" class="about-rules clearfix hidden"><div class="container Module Module-174"><div class="ModuleContent"><h1 class="abouttitle">Bộ qui tắc ứng xử</h1>
                                    <nav class="clearfix control">
                                        <ul>
                                            <li>
                                                <a class="transition wowbook-disabled" id="first" href="/{{$current_slug}}#">
                                                    <i class="fa fa-angle-double-left" aria-hidden="true">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="transition wowbook-disabled" id="back" href="/{{$current_slug}}#">
                                                    <i class="fa fa-angle-left" aria-hidden="true">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="transition" id="zoomout" href="/{{$current_slug}}#" title="zoom out">
                                                    <i class="fa fa-search-minus" aria-hidden="true">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="transition" id="zoomin" href="/{{$current_slug}}#">
                                                    <i class="fa fa-search-plus" aria-hidden="true">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="transition" id="next" href="/{{$current_slug}}#">
                                                    <i class="fa fa-angle-right" aria-hidden="true">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="transition" id="last" href="/{{$current_slug}}#">
                                                    <i class="fa fa-angle-double-right" aria-hidden="true">
                                                    </i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="ebrochure-wrap clearfix">
                                        <div class="respond_book">
                                            <div id="features" class="wowbook" style="height: 0px; width: 0px;"><div class="wowbook-zoomwindow" style="position: absolute; top: 0px; width: 1070px; height: 760px;"><div class="wowbook-zoomcontent" style="position: absolute; left: 0px; top: 0px; user-select: none; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); width: 1070px; height: 760px; zoom: 0;">




                                                        <div class="wowbook-clipper" style="position: absolute; left: 0px; top: 0px; width: 100%; overflow: hidden; z-index: 1; height: 760px;"><div class="wowbook-inner-clipper" style="position: absolute; width: 100%; overflow: hidden; height: 1100px; top: -170px;"><div class="wowbook-origin" style="position: absolute; width: 100%; height: 760px; top: 170px; left: -267.5px;"><div class="wowbook-page wowbook-right" style="width: 535px; height: 760px; display: block; position: absolute; left: 535px; top: 0px; z-index: 3;"><div class="wowbook-page-content" style="box-sizing: border-box; width: 535px; height: 760px;">
                                                                            <img src="img/12.jpg" alt="">
                                                                            <div class="wowbook-gutter-shadow" style="height: 760px;"></div></div></div><div class="wowbook-page wowbook-left" style="width: 535px; height: 760px; display: none; position: absolute; left: 0px; top: 0px; z-index: 1;"><div class="wowbook-page-content" style="box-sizing: border-box; width: 535px; height: 760px;">
                                                                            <img src="img/11.jpg" alt="">
                                                                            <div class="wowbook-gutter-shadow" style="height: 760px;"></div></div></div><div class="wowbook-page wowbook-right" style="width: 535px; height: 760px; display: block; position: absolute; left: 535px; top: 0px; z-index: 1;"><div class="wowbook-page-content" style="box-sizing: border-box; width: 535px; height: 760px;">
                                                                            <img src="img/212.jpg" alt="">
                                                                            <div class="wowbook-gutter-shadow" style="height: 760px;"></div></div></div><div class="wowbook-page wowbook-left" style="width: 535px; height: 760px; display: none; position: absolute; left: 0px; top: 0px; z-index: 3;"><div class="wowbook-page-content" style="box-sizing: border-box; width: 535px; height: 760px;">
                                                                            <img src="img/211.jpg" alt="">
                                                                            <div class="wowbook-gutter-shadow" style="height: 760px;"></div></div></div><div class="wowbook-shadow-clipper" style="display: none; width: 1070px; height: 760px;"><div class="wowbook-shadow-container" style="position: relative;"><div class="wowbook-shadow-internal"></div><div class="wowbook-shadow-fold"></div><div class="wowbook-fold-gradient-container"><div class="wowbook-fold-gradient"></div></div></div></div><div class="wowbook-hard-page-shadow" style="display: none; width: 535px; height: 760px;"></div><div class="wowbook-handle wowbook-left wowbook-disabled"></div><div class="wowbook-handle wowbook-right" style="left: 1020px;"></div></div></div></div><div class="wowbook-book-shadow" style="top: 0px; position: absolute; z-index: 0; display: block; width: 535px; height: 760px; left: 535px;"></div></div></div></div>
                                        </div>
                                    </div>
                                </div></div></section>

                                <section id="part-chung-chi" class="about-award clearfix"><div class="container Module Module-173"><div class="ModuleContent"><h2 class="abouttitle">Thành tựu - giải thưởng</h2>
                                    <div class="awardlist clearfix">
                                        <div class="row flex flex-wrap">
                                            @foreach ($archives as $archive)
                                                <div class="awardcol">
                                                    <figure>
                                                        <a class="img" data-fancybox="photo" href="uploads/{{$archive->img}}" alt="{{$archive->name}}" title="{{$archive->name}}">
                                                            <img src="uploads/{{$archive->img}}" alt="{{$archive->name}}">
                                                        </a>
                                                        <figcaption>
                                                            <div class="des">{{$archive->name}}</div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div></div></section>

                    </div>

                </section>
            </div>

        </main>

        @include('footer')
    </div>



</body></html>