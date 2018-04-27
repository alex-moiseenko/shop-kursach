<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
          integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<header>
    <div class="container-fluid top-line">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-2">
                    <i></i><span>CAll +30121313123</span>
                </div>
                <div class="col-lg-5 offset-lg-5">
                    <div class="row text-center top-menu">
                        <div class="col-3">Welcome msg!</div>
                        <div class="col-3">My Account</div>
                        <div class="col-3">My Wishlist</div>
                        <div class="col-3">Login</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center py-3">
                <div class="col-4">
                    <div class="row">
                        <div class="col-3">
                            <a href="#">Home</a>
                        </div>
                        <div class="col-3">
                            <a href="#">Gallery</a>
                        </div>
                        <div class="col-3">
                            <a href="#">Categories</a>
                        </div>
                        <div class="col-3">
                            <a href="3">Pages</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <img src="{{asset('img/Shophia.png')}}" alt="logo" class="m-auto">
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-6 offset-3">
                            <div class="row">
                                <div class="col-3 p-0">
                                    <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                                </div>
                                <div class="col-3 p-0">
                                    <a href="" class="social"><i class="fab fa-twitter"></i></a>
                                </div>
                                <div class="col-3 p-0">
                                    <a href="" class="social"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                                <div class="col-3 p-0">
                                    <a href="" class="social"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>

                        </div>
                        <div class="col-3 cart">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="counter">5</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="triangle"></div>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <div id="carousel">
                    <div style="background-image: url('{{asset('img/slide1.jpg')}}')" class="my-slide">
                        test
                    </div>
                    <div class="my-slide">test2</div>
                    <div class="my-slide">test3</div>
                </div>
            </div>
        </div>
    </div>
</header>

<script src="{{mix('js/app.js')}}"></script>


</body>
</html>