<!DOCTYPE html>
<!-- saved from url=(0026)https://anovafeed.vn/gop-y -->
<html id="ctl00_Html1" lang="vi"><head id="ctl00_Head1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" async=""></script><title>
        Góp ý - ANOVA FEED
    </title>

    <meta property="og:title" content="Góp ý">
    <meta property="og:site_name" content="ANOVA FEED">
    <meta itemprop="name" content="Góp ý">
    <link rel="search" type="application/opensearchdescription+xml" title="Tìm kiếm ANOVA FEED" href="#"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <link rel="stylesheet" type="text/css" href="css/toolbar.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="css/addons.css">
    <link rel="stylesheet" type="text/css" href="css/wow_book.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" href="https://anovafeed.vn/Data/Sites/1/skins/default/favicon.ico">
    <script src="js/jquery.min.js" type="text/javascript"></script><!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="js/js"></script>\

    <script src="js/jquery.mousewheel.min.js"></script></head>
<body id="ctl00_Body" class="canhcam vi-vn">


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

            @include('topmenu')

        </header>
        <div style="display: block; width: 1440px; height: 130px; float: none;"></div>
        <main>
            <div id="ctl00_divAlt1" class="altcontent1 cmszone">
                @include('breadcum')
            </div>

            <div class="container">
                <section class="row flex flex-wrap">

                    <div id="ctl00_divCenter" class="col-xs-12 middle-fullwidth">

                        {!! Form::open(['route' => 'feedback.store']) !!}
                        <section class="col-xs-12 col-md-8 push-md-2">
                            <div class="gopy Module Module-175">
                                <div class="ModuleContent">
                                    <div id="ctl00_mainContent_ctl00_pnlFormWizard">
                                        <div id="ctl00_mainContent_ctl00_pnlForm" class="wrap-form">
                                            <div class="flash-message">
                                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                                    @if(Session::has('alert-' . $msg))

                                                        <p id="show-msg-gop-y" class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                                    @endif
                                                @endforeach

                                                    @if ($errors->has('captcha'))
                                                    <span class="help-block" style="color: red">
                                                      <strong>{{ $errors->first('captcha') }}</strong>
                                                  </span>
                                                    @endif

                                                <script type="text/javascript">
                                                    $('.close').click(function () {
                                                        $("#show-msg-gop-y").css("display", "none")
                                                    });
                                                </script>
                                            </div>

                                            <div class="note">Nếu quý khách có ý kiến đóng góp, xin vui lòng điền vào Form dưới đây và gửi về cho chúng tôi. Xin chân thành cảm ơn!</div>
                                            <div id="ctl00_mainContent_ctl00_pnlQuestions">
                                                <div class="form-group qparagraph require ">
                                                    <label for="ctl00_mainContent_ctl00_ctld6193231b9314b5498637f7451603ff6_txtd6193231b9314b5498637f7451603ff6" id="ctl00_mainContent_ctl00_ctld6193231b9314b5498637f7451603ff6_lbld6193231b9314b5498637f7451603ff6" class="label">Nội dung góp ý (*)</label>
                                                    <textarea name="feedback-content" rows="2" cols="20" id="feedback-content-id"></textarea>
                                                    <span id="fb-content-label" class="fa fa-exclamation-triangle" style="display:none;">
                                                        Vui lòng nhập Nội dung góp ý (*).
                                                    </span>
                                                </div>
                                            </div>
                                            <div id="ctl00_mainContent_ctl00_divCaptcha" class="form-group frm-captcha">
                                                <div class="frm-captcha-input">
                                                    <label class="label">
                                                        Nhập mã hiển thị
                                                    </label>
                                                    <input id="captcha" type="text" class="form-control" name="captcha"/>
                                                </div>
                                                <div id="ctl00_mainContent_ctl00_captcha" class="RadCaptcha RadCaptcha_Default" style="width:50%;">
                                                    <span id="ctl00_mainContent_ctl00_captcha_ctl00" style="visibility:hidden;">Mã không đúng.</span>
                                                    <div id="ctl00_mainContent_ctl00_captcha_SpamProtectorPanel">
                                                        <div id="ctl00_mainContent_ctl00_captcha_ctl01" class="captcha">
                                                            <span>{!! captcha_img() !!}</span>
                                                            <button type="button" class="btn btn-success"><i class="fa fa-refresh" id="refresh"></i></button>

                                                            <script type="text/javascript">
                                                                $('#refresh').click(function(){
                                                                    $.ajax({
                                                                        type:'GET',
                                                                        url:'refreshcaptcha',
                                                                        success:function(data){
                                                                            $(".captcha span").html(data.captcha);
                                                                        }
                                                                    });
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="ctl00_mainContent_ctl00_up1" style="display:none;" role="status" aria-hidden="true">

                                                <img src="img/indicator1.gif" alt=" ">

                                            </div>
                                            <div class="form-group frm-btnwrap">
                                                <label class="label">&nbsp;</label>
                                                <div class="frm-btn">
                                                    <input type="submit" name="submit-content" value="Gửi" id="submit-content-id" class="btn btn-default frm-btn-submit">
                                                    <input name="reset-content" type="reset" id="reset-content-id" class="btn btn-default frm-btn-reset" value="Xóa">
                                                </div>
                                            </div>
                                            <div class="clear"></div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </section>

                        {!! Form::close() !!}
                    </div>
                </section>
            </div>
        </main>

        @include('footer')
    </div>


</body></html>