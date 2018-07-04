<section class="home-member clearfix">
    <div class="container"><div class="clearfix Module Module-165">
        <div class="ModuleContent"><h2 class="headtitle text-xs-center">Công ty thành viên</h2>
            <div class="pagedes text-xs-center">Tập đoàn DV với {{count($companies)}} công ty thành viên hoạt động trong nhiều lĩnh vực
            </div>
        </div>
    </div>
    <div class="clearfix Module Module-164"><div class="ModuleContent">
        <div class="memberlist flex flex-wrap flex-content-center">
            @foreach($companies as $company)
                <div class="membercol">
                    <figure>
                        <div class="memberimg">
                            <img src="uploads/{{$company->img}}" alt="{{$company->name}}">
                        </div>
                        <figcaption>
                            <h3 class="membername">{{$company->name}}</h3>
                        </figcaption>
                    </figure>
                </div>
            @endforeach
        </div>
        </div>
    </div>
    </div>
</section>