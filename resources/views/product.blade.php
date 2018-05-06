@extends('master')

{{--тайтл страницы меняй тут--}}
@section('title', 'Main page')

@section('css')
    {{--тут подключай файлик стилей именно для этой страницы--}}
    {{--раскоментируй строку ниже и замени название файла(main.css он лежит в public/css) на свое--}}
    {{--<link rel="stylesheet" href="{{asset('css/main.css')}}">--}}
@endsection

{{--в этой секции расположено все что будет между хедером и футером в <main>, смотри файл master.blade.php--}}
@section('main')
    <div class="container productPage">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-8">
                <div class="row images">
                    <div class="col-6 col-sm-6 col-md-12 col-lg-6">
                        <img src="{{$product->main_img}}" class="image mainImage">
                    </div>
                    @foreach(json_decode($product->additional_img) as $img)
                        @if($loop->index > 0)
                            <div class="col-6 col-sm-6 col-md-12 col-lg-6 pt-4">
                        @else
                            <div class="col-6 col-sm-6 col-md-12 col-lg-6">
                        @endif
                                <img src="{{$img}}" class="image">
                            </div>
                    @endforeach
                </div>
                <div class="description">
                    <h5>Description</h5>
                    <span>{{$product->description}}</span>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 side-menu">
                <h4>{{$product->name}}</h4>
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
                <br>
                <div class="size-selector pt-3">
                    <label for="inputState">Select size</label><br>
                    <div class="form-group">
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            @foreach(json_decode($product->sizes) as $size)
                                <option>{{$size}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="add-to-cart-button">Add to cart</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    {{--если необходим js только для одной страницы, подключай тут--}}
@endsection





