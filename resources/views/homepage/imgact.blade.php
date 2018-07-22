<section class="home-media clearfix">
    <div class="container">
        <div class="row flex flex-wrap">
            <div class="col-xs-12 col-lg-4 Module Module-170">
                <div class="ModuleContent">
                    <section class="home-gallery clearfix">
                        <h3 class="sidebartitle">HÌNH ẢNH HOẠT ĐỘNG CÔNG TY</h3>
                        <div class="albumslide slick-initialized slick-slider">
                            <div aria-live="polite" class="slick-list draggable">
                                <div class="slick-track" role="listbox" style="opacity: 1; width: 350px; transform: translate3d(0px, 0px, 0px);">
                                    <div class="item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00" style="width: 350px;">
                                        <a data-fancybox="gal1" href="{{ URL::asset('uploads/' . $img_act_feature->img_large)}}" title="{{ $img_act_feature->img_title }}" tabindex="0">
                                            <img src="{{ asset('uploads/' . $img_act_feature->img_large) }}" alt="{{ $img_act_feature->img_title }}">
                                        </a>
                                    </div></div></div>
                        </div>
                        <div class="album flex flex-wrap">
                            @foreach($img_acts as $img_act)
                                <a data-fancybox="gal1" class="picture" href="{{ URL::asset('uploads/' . $img_act->img_large)}}">
                                    <figure>
                                        <img src="{{ asset('uploads/' . $img_act->img_large) }}" alt="{{ $img_act->img_title }}">
                                    </figure>
                                </a>
                            @endforeach
                        </div><a href="{{ asset( URL('hinh-anh')) }}" class="viewmore">Xem thêm</a>
                    </section>
                </div>
            </div>
            <div class="col-xs-12 col-lg-4 Module Module-182">
                <div class="ModuleContent">
                    <h2 class="module-title">HƯỚNG DẪN KỸ THUẬT – VIDEO</h2>
                    <section class="home-video clearfix">
                        <div class="video">
                            <figure>
                                <a class="videoimg" href="{{ URL('kien-thuc-chan-nuoi/video-ky-thuat-chan-nuoi/heo') }}">
                                    <img src="img/4.jpg" alt="Heo">
                                </a>
                                <figcaption>
                                    <h3 class="videoname"><a href="{{ URL('kien-thuc-chan-nuoi/video-ky-thuat-chan-nuoi/heo') }}" target="_self" title="Heo">Heo</a></h3>
                                </figcaption>
                            </figure>
                        </div>
                        <ul class="videolist">
                            <li><a href="{{ URL('kien-thuc-chan-nuoi/video-ky-thuat-chan-nuoi/bo') }}" target="_self" title="Bò">Bò</a></li>
                            <li><a href="{{ URL('kien-thuc-chan-nuoi/video-ky-thuat-chan-nuoi/gia-suc-gia-cam') }}" target="_self" title="Gia cầm">Gia cầm</a></li>
                        </ul><a href="{{ URL('kien-thuc-chan-nuoi/video-ky-thuat-chan-nuoi/heo') }}" class="viewmore">Xem thêm</a>
                    </section>
                </div>
            </div>
            <div class="col-xs-12 col-lg-4 Module Module-171">
                <div class="ModuleContent">
                    <section class="home-faq clearfix">
                        <h3 class="sidebartitle">Câu hỏi thường gặp</h3>
                        <div class="homefaq-list clearfix">
                            @foreach($faqs as $faq)
                                <div class="faq clearfix">
                                    <div class="faqtitle">{{ $faq->question }}</div>
                                    <div class="faqcontent" style="">
                                        <div class="content">
                                            {!! stripslashes($faq->answer) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a href="{{ URL('kien-thuc-chan-nuoi/cau-hoi-thuong-gap') }}" class="viewmore">Xem thêm</a>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>