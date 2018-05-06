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

<div class="container gallery">
    <div class="row">
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 gallerySections">
            <div>
                <a href="">
                    <img src="img/coat.jpg" class="galleryImage">
                </a>
            </div>
            <p class="categories"><a href="">Coats & Jackets</a></p>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 gallerySections">
            <div>
                <a href="">
                    <img src="img/dress.jpg" class="galleryImage">
                </a>
            </div>
            <p class="categories"><a href="">Dresses</a></p>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 gallerySections">
            <div>
                <a href="">
                    <img src="img/sweatshirt.jpg" class="galleryImage">
                </a>
            </div>
            <p class="categories"><a href="">Sweatshirts</a></p>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 gallerySections" >
            <div>
                <a href="">
                    <img src="img/jeans.jpg" class="galleryImage">
                </a>
            </div>
            <p class="categories"><a href="">Jeans</a></p>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 gallerySections">
            <div>
                <a href="">
                     <img src="img/cardigan.jpg" class="galleryImage">
                </a>
            </div>
            <p class="categories"><a href="">Jumpers & Cardigans</a></p>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 gallerySections">
            <div>
                <a href="">
                    <img src="img/shorts.jpg" class="galleryImage">
                </a>
            </div>
            <p class="categories"><a href="">Shorts</a></p>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 gallerySections">
            <div>
                <a href="">
                    <img src="img/skirt.jpg" class="galleryImage">
                </a>
            </div>
            <p class="categories"><a href="">Skirts</a></p>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 gallerySections">
            <div>
                <a href="">
                     <img src="img/top.jpg" class="galleryImage">
                </a>
            </div>
            <p class="categories"><a href="">Tops</a></p>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 gallerySections">
            <div>
                <a href="">
                    <img src="img/access.jpg" class="galleryImage">
            </div>
            <p class="categories"><a href="">Accessories</a></p>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 gallerySections">
            <div>
                <a href="">
                    <img src="img/shoes.jpg" class="galleryImage">
                </a>
            </div>
            <p class="categories"><a href="">Shoes</a></p>
        </div>
    </div>
</div>





@endsection

@section('js')
    {{--если необходим js только для одной страницы, подключай тут--}}
@endsection
