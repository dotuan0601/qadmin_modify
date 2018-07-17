
<section class="breadcrumb-wrap clearfix">
    <div class="clearfix Module Module-141">
        <div class="ModuleContent">
            <div class="breadcrumb-bg">
                <img src="img/default.jpg" alt="">
                <div class="breadcrumb-overlay">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="pagename"> </h1>
        <div class="clearfix Module Module-142">
            <ol class="breadcrumb">
                @foreach($breadcrumb_arr as $breadcrum)
                    <li itemscope=""><a href="{{str_slug($breadcrum['name'])}}" class="{{$breadcrum['class']}}" itemprop="url"><span itemprop="title">{{$breadcrum['name']}}</span></a></li>
                @endforeach
            </ol>
        </div>
    </div>
</section>