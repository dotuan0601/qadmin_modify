<section data-parallax="scroll" data-image-src="img/bg.jpg" class="home-news clearfix parallax-window">
    <div class="container"><div class="clearfix Module Module-159"><div class="ModuleContent"><h2 class="headtitle text-xs-center">Tin tức – Thông tin thị trường</h2>
                <div class="pagedes text-xs-center">Cập nhật những thông tin mới nhất từ Dv site</div></div></div><div class="newslist">
            <div class="row flex flex-wrap"><div class="col-xs-12 col-lg-9 Module Module-160"><div class="ModuleContent">
                        <div class="row flex flex-wrap">
                            @foreach($feature_news as $news)
                                <div class="col-xs-12 col-lg-5">
                                    <div class="newscol big">
                                        <figure>
                                            <a class="newsimg" href="https://anovafeed.vn/tin-tuc-su-kien/tin-tuc-cong-ty/anova-feed-se-chia-cung-cong-dong" target="_self" title="Dv site sẻ chia cùng cộng đồng">
                                                <img src="uploads/{{$news->img}}" alt="Dv site sẻ chia cùng cộng đồng">
                                            </a>
                                            <figcaption>
                                                <time>11/05/2018</time>
                                                <h3 class="newsname">
                                                    <a href="#" target="_self" title="Dv site sẻ chia cùng cộng đồng">{{$news->title}}</a></h3>
                                                <div class="newsdes">
                                                    <p style="text-align: justify;">
                                                        {{$news->short_description}}
                                                    </p></div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-xs-12 col-lg-7">
                                <div class="row flex flex-wrap">
                                    @foreach($other_news as $news)
                                        <article>
                                            <div class="newscol">
                                                <figure>
                                                    <a class="newsimg" href="new_details/{{$news->id}}" target="_self" title="Dv site – Doanh hiệu Hàng Việt Nam Chất lượng cao 2018">
                                                        <img src="uploads/{{$news->img}}" alt="Dv site – Doanh hiệu Hàng Việt Nam Chất lượng cao 2018">
                                                    </a>
                                                    <figcaption>
                                                        <h3 class="newsname">
                                                            <a href="new_details/{{$news->id}}" target="_self" title="Dv site – Doanh hiệu Hàng Việt Nam Chất lượng cao 2018">{{$news->title}}</a></h3>
                                                        <div class="newsdes">{{$news->short_description}}</div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                    @endforeach
                                </div>
                            </div>
                        </div></div></div><div class="col-xs-12 col-lg-3"><section class="home-chart clearfix"><div class="chartgroup clearfix Module Module-163"><div class="ModuleContent"><div class="sidebartitle"><a href="https://www.anovafeed.vn/tin-tuc-su-kien/tin-tuc-thi-truong-noi-bat">Giá heo, gà, vịt</a></div>
                                <div class="chartmap"><a href="http://www.anovafeed.vn/tin-tuc-su-kien/tin-tuc-thi-truong-noi-bat/anova-feed-gia-ca-thi-truong-ngay-2862018"><img alt="" src="img/gia-heo-13-04-2018d.jpg"></a><br>
                                </div>
                                <a href="https://www.anovafeed.vn/tin-tuc-su-kien/tin-tuc-thi-truong-noi-bat/anova-feed-gia-ca-thi-truong-ngay-2862018" class="viewmore">Xem thêm</a></div></div><div class="enewsgroup clearfix Module Module-162"><div class="ModuleContent"><div class="sidebartitle">Tin thị trường</div><div id="verticalscroll-2" class="widget-sidebar widget verticalScroll">
                                    <h4 class="widget-title">Thị trường 19/06/2018</h4>
                                    <link rel="stylesheet" type="text/css" media="all" href="{{ URL::asset('css/newsscrollcss.css')}}">
                                    <marquee height="135" onmouseout="this.start()" onmouseover="this.stop()" scrolldelay="5" scrollamount="2" direction="up" behavior="scroll">
                                        <div style="padding: 5px;">
                                            <div class="newsscroller_title"><a href="http://channuoivietnam.com/" target="_blank">______________________________</a></div>
                                            <div style="clear: both;"></div>
                                            <div class="scrollercontent">
                                                .<br>
                                                @foreach($price_shows as $price_show)
                                                    {{$price_show->price_show_content}}<br>
                                                    ______________________________<br>
                                                @endforeach
                                            </div>
                                        </div>
                                    </marquee>
                                </div></div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>