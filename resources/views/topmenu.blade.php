
                <section class="headerbottom clearfix">
                    <div class="container">
                        <section class="menu clearfix">
                            <div class="sitelogo Module Module-135"><div class="ModuleContent"><a href="https://anovafeed.vn/"><img alt="" src="img/logo.png"></a>
<div class="text"><span style="font-size: 16px;">HIỆU QUẢ SỐ 1</span></div></div></div>
                            <div class="clearfix Module Module-42"><div class="ModuleContent">

<ul class="menulink">

  @foreach ($arr_menu as $each_menu)
    @php
        $class_name = '';
        if (array_key_exists('children', $each_menu) && $each_menu['children']) {
            if ($each_menu['is_active']) {
                $class_name = 'active hassub';
            }
            else {
                $class_name = 'hassub';
            }
        }
        elseif ($each_menu['is_active']) {
            $class_name = 'active';
        }

    @endphp
    <li class="{{$class_name}}"><a href="/{{str_slug($each_menu['name'])}}" target="_self">{{$each_menu['name']}}</a>

    @if($class_name == 'hassub' || $class_name == 'active hassub')
    <div class="btn-showsub"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
    <div class="sub">
        <ul>
        @foreach( $each_menu['children'] as $sub_menu)
            <li><a href="/{{str_slug($sub_menu)}}" target="_self">{{$sub_menu}}</a></li>
        @endforeach
        </ul>
        </div>
    @endif

    </li>
@endforeach

                            <div class="topmenu clearfix">
                                <div class="title">Sitemaps</div>
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
                            </div>
</ul>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>