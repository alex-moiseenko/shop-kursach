@extends('master')

@section('title', 'Catalog')

@section('css')
    {{--<link rel="stylesheet" href="{{asset('css/main.css')}}">--}}
@endsection

@section('main')
    <div class="container catalogContainer">
        <div class="row">
{{--
            <div class="thinlineFilt"></div>
            <input type="checkbox" id="hft" class="hidden-filter-ticker">
            <label class="btn-filter" for="hft">Filrers</label>
            <div class="thinlineFilt"></div>--}}

            <div class="col-lg-3 filters">
                <form action="{{route('catalog-filter')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="categoryFilter filterBlock col-12">
                            <h5>Categories</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Coats & Jackets" id="cat1"
                                       name="category[]">
                                <label class="form-check-label" for="cat1">Coats & Jackets</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Dresses" id="cat2"
                                       name="category[]">
                                <label class="form-check-label" for="cat2">Dresses</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Sweatshirts" id="cat3"
                                       name="category[]">
                                <label class="form-check-label" for="cat3">Sweatshirts</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Jeans" id="cat4"
                                       name="category[]">
                                <label class="form-check-label" for="cat4">Jeans</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Jumpers & Cardigans" id="cat5"
                                       name="category[]">
                                <label class="form-check-label" for="cat5">Jumpers & Cardigans</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Shorts" id="cat6"
                                       name="category[]">
                                <label class="form-check-label" for="cat6">Shorts</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Skirts" id="cat7"
                                       name="category[]">
                                <label class="form-check-label" for="cat7">Skirts</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Tops" id="cat8"
                                       name="category[]">
                                <label class="form-check-label" for="cat8">Tops</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Accessories" id="cat9"
                                       name="category[]">
                                <label class="form-check-label" for="cat9">Accessories</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Shoes" id="cat10"
                                       name="category[]">
                                <label class="form-check-label" for="cat10">Shoes</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="sizeFilter filterBlock col-12">
                            <h5>Size</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="XS" id="size1" name="size[]">
                                <label class="form-check-label" for="size1">XS</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="S" id="size2" name="size[]">
                                <label class="form-check-label" for="size2">S</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="M" id="size3" name="size[]">
                                <label class="form-check-label" for="size3">M</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="L" id="size4" name="size[]">
                                <label class="form-check-label" for="size4">L</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="XL" id="size5" name="size[]">
                                <label class="form-check-label" for="size5">XL</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 priceFilter">
                            <h5>Price Range</h5>
                            <div class="col-10">
                                <div class="priceFilter filterBlock row align-items-center">
                                    <div class="col-4 px-0"><input type="number" min="0" max="{{$max}}" value="0" class="form-control" name="price-from"></div>
                                    <div class="col-2 text-center p-0">to</div>
                                    <div class="col-4 px-0"><input type="number" min="0" max="{{$max}}" value="{{$max}}" class="form-control" name="price-to"></div>
                                    <div class="col-2">USD</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-info" type="submit">Search</button>
                </form>
            </div>

            <div class="col-lg-9 catalogItems">
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
            </div>

        </div>
    </div>
@endsection

@section('js')

@endsection




