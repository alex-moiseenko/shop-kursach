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
            <div class="col-md-6 col-lg-8">
                <div class="row images">
                    <div class="col-lg-6">
                        <img src="{{$product->main_img}}" class="image">
                    </div>
                    <div class="col-lg-6">
                        <img src="{{$product->additional_img}}" class="image">
                    </div>
                </div>
                <div class="description">
                    <h5>Description</h5>
                    <span>{{$product->description}}</span>
                </div>

            </div>
            <div class="col-md-6 col-lg-4 side-menu">
                <span>{{$product->name}}</span>
                <br>
                <span>{{$product->price}} USD</span>
                <br>
                <div class="size-selector">
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





