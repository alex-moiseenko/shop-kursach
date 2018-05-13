<div class="row">
    @foreach($products as $product)
        <div class="catalogItem col-lg-4 col-md-6 col-sm-6 col-xs-6">
            <a href="{{url('/product/'.$product->id)}}">
                <img src="{{$product->main_img}}" class="images">
                <span>{{$product->name}}</span><br>
                @if($product->available)
                    @if($product->sale >= 0 && $product->sale != null)
                        <span class="text-danger"><s>{{$product->price}} usd</s></span>
                        <span>{{$product->price_with_sale}} usd</span>
                    @else
                        <span>{{$product->price}} usd</span>
                    @endif
                @else
                    <span class="text-muted">Out of stock</span>
                @endif
            </a>
        </div>
    @endforeach
    <div class="clearfix"></div>
</div>
<div class="row">
    <div class="col-12 d-flex justify-content-center">
        {{ $products->links() }}
    </div>
</div>