<footer>
    <div class="container">
        <div class="footertop">
            <div class="row flex flex-wrap">
                <div class="col-xs-12 col-md-4 col-lg-3 col-xl-2">
                    <div class="footercol Module Module-139">
                        <div class="ModuleContent">
                            <div class="sitelogo"><a href="https://anovafeed.vn/#"><img alt="" src="img/logo.png"></a></div>
                            <a href="https://anovafeed.vn/Data/Sites/1/media/test.txt" class="download">
                            </a>
                            <div class="text">
                                <a href="https://anovafeed.vn/Data/Sites/1/media/test.txt" class="download"></a>
                                <a href="https://anovafeed.vn/Data/Sites/1/media/default/catalogue-n1-(21x15cm)-(file-xem-truoc).pdf" class="download">Tải Brochure</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-8 col-lg-9 col-xl-10 Module Module-55">
                    <div class="ModuleContent">
                        <section class="row flex flex-wrap">
                            @foreach($footer_sitemap as $sitemap)
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="footercol">
                                        <div class="title">{{$sitemap['name']}}</div>
                                        @if($sitemap['children'])
                                            <nav class="footerlink">
                                                <ul>
                                                    @foreach($sitemap['children'] as $child)
                                                        <li><a href="{{$child['link']}}" target="_self">{{$child['name']}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </nav>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerbottom Module Module-140">
            <div class="ModuleContent">
                <div class="addr">{{$footer[0]->company_info}}
                    - Điện thoại: <a href="tel:{{$footer[0]->phone}}">{{$footer[0]->phone}}</a>
                    - Fax: {{$footer[0]->fax}}
                    - Email: <a href="mailto:{{$footer[0]->email}}">{{$footer[0]->email}}</a>
                </div>
                <div class="copyright">©{{$footer[0]->copyright}}</div>
            </div>
        </div>
    </div>

</footer>