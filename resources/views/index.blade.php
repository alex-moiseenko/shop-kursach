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
    {{--Карусель--}}
    <div class="container-fluid">
        <div class="row">
            <div class="triangle"></div>
        </div>
        <div class="row">
            <div class="col-12 px-0">
                <div id="carousel">
                    <div style="background-image: url('{{asset('img/slider1.png')}}')" class="my-slide">
                        <div class="row">
                            <div class="">
                                <div class="border1">
                                    <div class="border2">
                                        <h6>mid-season</h6>
                                        <h1>sale</h1>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="smallerline1"></div>
                                                <div class="biggerline1"></div>
                                            </div>
                                            <div class="col-lg-2"><p>up to</p></div>
                                            <div class="col-lg-5">
                                                <div class="smallerline2"></div>
                                                <div class="biggerline2"></div>
                                            </div>
                                        </div>
                                        <h3>50% off</h3>
                                    </div>
                                </div>
                                <div class="shopNow">
                                    <p>shop now</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-image: url('{{asset('img/slider2.png')}}')" class="my-slide">
                        <div class="row">
                            <div class="">
                                <div class="border1">
                                    <div class="border2">
                                        <h6>mid-season</h6>
                                        <h1>sale</h1>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="smallerline1"></div>
                                                <div class="biggerline1"></div>
                                            </div>
                                            <div class="col-lg-2"><p>up to</p></div>
                                            <div class="col-lg-5">
                                                <div class="smallerline2"></div>
                                                <div class="biggerline2"></div>
                                            </div>
                                        </div>
                                        <h3>50% off</h3>
                                    </div>
                                </div>
                                <div class="shopNow">
                                    <p>shop now</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-image: url('{{asset('img/slider3.png')}}')" class="my-slide">
                        <div class="row">
                            <div class="">
                                <div class="border1">
                                    <div class="border2">
                                        <h6>mid-season</h6>
                                        <h1>sale</h1>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="smallerline1"></div>
                                                <div class="biggerline1"></div>
                                            </div>
                                            <div class="col-lg-2"><p>up to</p></div>
                                            <div class="col-lg-5">
                                                <div class="smallerline2"></div>
                                                <div class="biggerline2"></div>
                                            </div>
                                        </div>
                                        <h3>50% off</h3>
                                    </div>
                                </div>
                                <div class="shopNow">
                                    <p>shop now</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-image: url('{{asset('img/slider4.png')}}')" class="my-slide">
                        <div class="row">
                            <div class="">
                                <div class="border1">
                                    <div class="border2">
                                        <h6>mid-season</h6>
                                        <h1>sale</h1>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="smallerline1"></div>
                                                <div class="biggerline1"></div>
                                            </div>
                                            <div class="col-lg-2"><p>up to</p></div>
                                            <div class="col-lg-5">
                                                <div class="smallerline2" float="left"></div>
                                                <div class="biggerline2"></div>
                                            </div>
                                        </div>
                                        <h3>50% off</h3>
                                    </div>
                                </div>
                                <div class="shopNow">
                                    <p>shop now</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row customerService">
            <div class="col-lg-4 shipment">
                <div class="row">
                    <div class="col-lg-2">
                        <img src="{{asset('img/shipment.png')}}" class="serviceImg1">
                    </div>
                    <div class=" offset-1 col-lg-7  ">
                        <p>free shippling</p>
                        <span>in order min $200</span>
                    </div>
                    <div class="offset-1 col-lg-1 arrow1">
                        <div class="triangle1"></div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 returns">
                <div class="row">
                    <div class="col-lg-1">
                        <div class="triangle2"></div>
                    </div>
                    <div class="col-lg-2">
                        <img src="{{asset('img/time.png')}}" class="serviceImg2">
                    </div>
                    <div class=" col-lg-7">
                        <p>30-days returns</p>
                        <span>Money Back Guarantee</span>
                    </div>
                    <div class="offset-1 col-lg-1">
                        <div class="triangle3"></div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 support">
                <div class="row">
                    <div class="col-lg-1 arrow1">
                        <div class="triangle4"></div>
                    </div>
                    <div class="col-lg-2">
                        <img src="{{asset('img/settings.png')}}" class="serviceImg3">
                    </div>
                    <div class="offset-1 col-lg-6">
                        <p>24/7 support</p>
                        <span>Lifestime support</span>
                    </div>
                </div>

            </div>
        </div>


        <div class="paragraphHeader">
            <div class="row">
                <div class="col-lg-4">
                    <div class=" thinline"></div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class=" col-lg-1">
                            <div class="square"></div>
                        </div>
                        <p>HandPicked</p>
                        <div class="col-lg-1">
                            <div class="square"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class=" thinline"></div>
                </div>
            </div>
        </div>

        <div class="handPickedContent">
            <div class="row ">
                <div class="col-lg-4 items">
                    <div class="item1 row">
                        <div class="whiteFrame"></div>
                        <img src="{{asset('img/item1.png')}}">
                    </div>

                    <div class="item2 row">
                        <div class="whiteFrame"></div>
                        <img src="{{asset('img/item2.png')}}">
                    </div>
                </div>
                <div class="col-lg-4 items">
                    <div class="longitem row">
                        <div class="whiteFrame"></div>
                        <img src="{{asset('img/longitem.png')}}">
                    </div>

                </div>
                <div class="col-lg-4 items">
                    <div class="item4 row">
                        <div class="whiteFrame"></div>
                        <img src="{{asset('img/item4.png')}}">
                    </div>

                    <div class="item5 row">
                        <div class="whiteFrame"></div>
                        <img src="{{asset('img/item5.png')}}">
                    </div>

                </div>
            </div>
        </div>


        <div class="paragraphHeader">
            <div class="row">
                <div class="col-lg-4">
                    <div class=" thinline"></div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class=" col-lg-1">
                            <div class="square"></div>
                        </div>
                        <p>Summer collection</p>
                        <div class="col-lg-1">
                            <div class="square"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class=" thinline"></div>
                </div>
            </div>
        </div>

        <div class="summerCollCont">
            <div class="row">
                <div class="col-lg-3">
                    <div class="summerItems row">
                        <div class="shadow"></div>
                        <img src="{{asset('img/recentitem1.png')}}">
                        <div class="row addToCart">
                            <div class="triangle1"></div>
                            <div class="rectangle">+ add to cart</div>
                            <div class="triangle2"></div>
                        </div>
                    </div>

                    <div class="summerItems row">
                        <div class="shadow"></div>
                        <img src="{{asset('img/recentitem5.png')}}">
                        <div class="row addToCart">
                            <div class="triangle1"></div>
                            <div class="rectangle">+ add to cart</div>
                            <div class="triangle2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="summerItems row">
                        <div class="shadow"></div>
                        <img src="{{asset('img/recentitem2.png')}}">
                        <div class="row addToCart">
                            <div class="triangle1"></div>
                            <div class="rectangle">+ add to cart</div>
                            <div class="triangle2"></div>
                        </div>
                    </div>
                    <div class="summerItems row">
                        <div class="shadow"></div>
                        <img src="{{asset('img/recentitem6.png')}}">
                        <div class="row addToCart">
                            <div class="triangle1"></div>
                            <div class="rectangle">+ add to cart</div>
                            <div class="triangle2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="summerItems row">
                        <div class="shadow"></div>
                        <img src="{{asset('img/recentitem3.png')}}">
                        <div class="row addToCart">
                            <div class="triangle1"></div>
                            <div class="rectangle">+ add to cart</div>
                            <div class="triangle2"></div>
                        </div>
                    </div>
                    <div class="summerItems row ">
                        <div class="shadow"></div>
                        <img src="{{asset('img/recentitem7.png')}}">
                        <div class="row addToCart">
                            <div class="triangle1"></div>
                            <div class="rectangle">+ add to cart</div>
                            <div class="triangle2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="summerItems row">
                        <div class="shadow"></div>
                        <img src="{{asset('img/recentitem4.png')}}">
                        <div class="row addToCart">
                            <div class="triangle1"></div>
                            <div class="rectangle">+ add to cart</div>
                            <div class="triangle2"></div>
                        </div>
                    </div>
                    <div class="summerItems row">
                        <div class="shadow"></div>
                        <img src="{{asset('img/recentitem8.png')}}">
                        <div class="row addToCart">
                            <div class="triangle1"></div>
                            <div class="rectangle">+ add to cart</div>
                            <div class="triangle2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="paragraphHeader">
            <div class="row">
                <div class="col-lg-4">
                    <div class=" thinline"></div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class=" col-lg-1">
                            <div class="square"></div>
                        </div>
                        <p>Our brand</p>
                        <div class="col-lg-1">
                            <div class="square"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class=" thinline"></div>
                </div>
            </div>
        </div>

        <div class="brandContent">
            <div class="row">
                <div class="col-lg-2">
                    <div class="brandItems">
                        <img src="{{asset('img/Layer 6.png')}}">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="brandItems">
                        <img src="{{asset('img/Layer 7.png')}}">
                    </div>

                </div>
                <div class="col-lg-2">
                    <div class="brandItems">
                        <img src="{{asset('img/Layer 8.png')}}">
                    </div>

                </div>
                <div class="col-lg-2">
                    <div class="brandItems">
                        <img src="{{asset('img/Layer 9.png')}}">
                    </div>

                </div>
                <div class="col-lg-2">
                    <div class="brandItems">
                        <img src="{{asset('img/Layer 10.png')}}">
                    </div>

                </div>
                <div class="col-lg-2">
                    <div class="brandItems">
                        <img src="{{asset('img/Layer 11.png')}}">
                    </div>

                </div>
            </div>
        </div>

        <div class="paragraphHeader">
            <div class="row">
                <div class="col-lg-4">
                    <div class=" thinline"></div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class=" col-lg-1">
                            <div class="square"></div>
                        </div>
                        <p>Customers Says</p>
                        <div class="col-lg-1">
                            <div class="square"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class=" thinline"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid customersSays">
        <div class="container">
            <div class="row">
                <div class="triangle-bottom"></div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <img src="{{asset('img/woman.png')}}">
                </div>
                <div class="col-lg-3">
                    <p class="quote">Sed un perspiciatis <br> unde omnis iste natus error sit <br>voluptatem accusantium
                        doloremque</p>

                    <p class="name">Sandra Dewi</p>
                    <p class="profession">fashion stylist</p>
                </div>
                <div class=" col-lg-3">
                    <p class="quote" align="right">Sed un perspiciatis <br> unde omnis iste natus error sit <br>voluptatem
                        accusantium doloremque</p>
                    <p class="name" align="right">Shaheer Sheikh</p>
                    <p class="profession" align="right">designer</p>

                </div>
                <div class="col-lg-3">
                    <img src="{{asset('img/man.png')}}">
                </div>
            </div>

        </div>
    </div>
@endsection

@section('js')
    {{--если необходим js только для одной страницы, подключай тут--}}
@endsection

