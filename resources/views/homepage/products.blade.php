<div class="home-product clearfix"><div class="container Module Module-158"><div class="ModuleContent"><h1 class="headtitle text-xs-center" style="text-align: center;">Sản phẩm</h1>
    <div class="pagedes text-xs-center" style="text-align: center;">THỨC ĂN CHẤT LƯỢNG CAO CHO CHĂN NUÔI HIỆU QUẢ</div>
    <div class="row flex flex-wrap flex-content-center" style="text-align: center;">
        @foreach($products as $product)
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="productcol">
                    <figure>
                        <div style="text-align: center;">
                            <a href=" {{ URL('san-pham') }}" class="productimg" style="background-color: #ffffff;"><img alt="" src="{{ 'uploads/' . $product->img}}"></a>
                        </div>
                        <figcaption>
                            <h3 class="productname" style="text-align: center;"> <a href="/san-pham/anova-feed">{{$product->name}}</a></h3>
                        </figcaption>
                    </figure>
                </div>
            </div>
        @endforeach

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="productcol">
                <figure><br>
                    <figcaption>
                        <h3 class="productname"></h3>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div></div></div>
</div>