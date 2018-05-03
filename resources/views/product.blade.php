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
                    <img src="img/product1.jpg" class="image">
                </div>
                <div class="col-lg-6">
                    <img src="img/product2.jpg" class="image">
                </div>
            </div>
            <div class="description">
                <h5>Description</h5>
                <span>Jacket-shirt of three-dimensional cut with a collar with lapels, long sleeves,
                    pockets with valves, embroidery in front, side cuts on the bottom</span>
            </div>

        </div>
        <div class="col-md-6 col-lg-4 side-menu">
            <span>Jacket-shirt</span>
            <br>
            <span>29,00 USD</span>
            <br>
            <div class="size-selector">
                <span>Select size</span><br>
                <ul class="subSelector">
                    <li><a href ="">XS</a></li>
                    <li><a href ="">S</a></li>
                    <li><a href ="">M</a></li>
                    <li><a href ="">L</a></li>
                    <li><a href ="">XL</a></li>
                </ul>
                <button type="submit" class="add-to-cart-button">Add to cart</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    {{--если необходим js только для одной страницы, подключай тут--}}
@endsection





