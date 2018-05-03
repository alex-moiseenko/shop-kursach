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
<div class="container catalogContainer">
    <div class="row">
        <div class="col-lg-3 filters">
            <div class="categoryFilter filterBlock">
                <span>Categories</span>
                <ul>
                    <li> <input type="checkbox" class="checkboxes">Coats & Jackets </li>
                    <li> <input type="checkbox" class="checkboxes">Dresses</li>
                    <li> <input type="checkbox" class="checkboxes">Sweatshirts </li>
                    <li><input type="checkbox" class="checkboxes">Jeans </li>
                    <li><input type="checkbox" class="checkboxes">Jumpers & Cardigans</li>
                    <li><input type="checkbox" class="checkboxes">Shorts</li>
                    <li><input type="checkbox" class="checkboxes">Skirts</li>
                    <li><input type="checkbox" class="checkboxes">Tops</li>
                    <li><input type="checkbox" class="checkboxes">Accessories</li>
                    <li><input type="checkbox" class="checkboxes">Shoes </li>
                </ul>
            </div>

            <div class="sizeFilter filterBlock">
                <span>Size</span>
                <ul>
                    <li><input type="checkbox" class="checkboxes">XS</li>
                    <li><input type="checkbox" class="checkboxes">S</li>
                    <li> <input type="checkbox" class="checkboxes">M</li>
                    <li> <input type="checkbox" class="checkboxes">L</li>
                    <li> <input type="checkbox" class="checkboxes">XL</li>
                </ul>
            </div>

            <div class="priceFilter filterBlock">
                <span>Price Range</span><br><br>
                <label>from   </label><input type="text" size="4">
                <label>to    </label><input type="text" size="4">
                <label> usd</label>

            </div>

            <button>Search</button>

        </div>

        <div class="col-lg-9 row catalogItems">
            <div class="catalogItem col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <img src="img/01.jpg" class="images" >
                <a href= "">  <span>jacket-shirt</span> </a> <br>  <span> 60,00 usd</span>
            </div>
            <div class="catalogItem col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <img src="img/02.jpg" class="images">
                <a href= " "> <span>jeans jacket</span>  </a> <br>  <span> 60,00 usd </span>
            </div>

            <div class="catalogItem col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <img src="img/03.jpg" class="images">
                <a href= " ">  <span>coat</span> </a>  <br><span> 72,00 usd</span>
            </div>

            <div class="catalogItem col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <img src="img/04.jpg" class="images">
                <a href= " "> <span>long coat</span>  </a> <br> <span> 78,00 usd
                </span>
            </div>

            <div class="catalogItem col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <img src="img/05.jpg" class="images">
                <a href= " "> <span>windbreaker  </span> </a> <br> <span> 120,00 usd
                </span>
            </div>

            <div class="catalogItem col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <img src="img/06.jpg" class="images">
                <a href= " ">  <span>printed kimono</span> </a><br> <span>  90,00 usd
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection

@section('js')
    {{--если необходим js только для одной страницы, подключай тут--}}
@endsection




