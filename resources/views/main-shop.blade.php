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
                    <i class="fas fa-phone phone"></i><span>Call +30121313123</span>
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
            <div class="row align-items-center py-4">
                <div class="col-4 menu">
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
                            <a href="#">Pages</a>
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

</header>

    <div class="container-fluid">
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
                                            <div class ="col-lg-5">
                                                <div class="smallerline1"></div>
                                                <div class="biggerline1"></div>
                                            </div>
                                            <div class ="col-lg-2"><p>up to</p></div>
                                            <div class ="col-lg-5">
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
                                        <h6 >mid-season</h6>
                                        <h1>sale</h1>
                                        <div class="row">
                                            <div class ="col-lg-5">
                                                <div class="smallerline1"></div>
                                                <div class="biggerline1"></div>
                                            </div>
                                            <div class ="col-lg-2" ><p>up to</p></div>
                                            <div class ="col-lg-5">
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
                                            <div class ="col-lg-5">
                                                <div class="smallerline1"></div>
                                                <div class="biggerline1"></div>
                                            </div>
                                                <div class ="col-lg-2"><p>up to</p></div>
                                            <div class ="col-lg-5">
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
                                            <div class ="col-lg-5">
                                                <div class="smallerline1"></div>
                                                <div class="biggerline1"></div>
                                            </div>
                                            <div class ="col-lg-2"><p>up to</p></div>
                                            <div class ="col-lg-5">
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
                        <img src="{{asset('img/item1.png')}}" >
                    </div>

                    <div class="item2 row">
                        <div class="whiteFrame"></div>
                        <img src="{{asset('img/item2.png')}}" >
                    </div>
                </div>
                <div class="col-lg-4 items">
                    <div class="longitem row">
                        <div class="whiteFrame"></div>
                        <img src="{{asset('img/longitem.png')}}" >
                    </div>

                </div>
                <div class="col-lg-4 items">
                    <div class="item4 row">
                        <div class="whiteFrame"></div>
                        <img src="{{asset('img/item4.png')}}" >
                    </div>

                    <div class="item5 row">
                        <div class="whiteFrame"></div>
                        <img src="{{asset('img/item5.png')}}" >
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
                        <img src="{{asset('img/recentitem1.png')}}" >
                        <div class="row addToCart">
                            <div class="triangle1"></div>
                            <div class="rectangle">+ add to cart</div>
                            <div class="triangle2"></div>
                        </div>
                    </div>

                    <div class="summerItems row">
                        <div class="shadow"></div>
                        <img src="{{asset('img/recentitem5.png')}}" >
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
                        <img src="{{asset('img/recentitem2.png')}}" >
                        <div class="row addToCart">
                            <div class="triangle1"></div>
                            <div class="rectangle">+ add to cart</div>
                            <div class="triangle2"></div>
                        </div>
                    </div>
                    <div class="summerItems row">
                        <div class="shadow"></div>
                        <img src="{{asset('img/recentitem6.png')}}" >
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
                        <img src="{{asset('img/recentitem3.png')}}" >
                        <div class="row addToCart">
                            <div class="triangle1"></div>
                            <div class="rectangle">+ add to cart</div>
                            <div class="triangle2"></div>
                        </div>
                    </div>
                    <div class="summerItems row ">
                        <div class="shadow"></div>
                        <img src="{{asset('img/recentitem7.png')}}" >
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
                        <img src="{{asset('img/recentitem4.png')}}" >
                        <div class="row addToCart">
                            <div class="triangle1"></div>
                            <div class="rectangle">+ add to cart</div>
                            <div class="triangle2"></div>
                        </div>
                    </div>
                    <div class="summerItems row">
                        <div class="shadow"></div>
                        <img src="{{asset('img/recentitem8.png')}}" >
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
                        <img src="{{asset('img/Layer 6.png')}}" >
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="brandItems">
                        <img src="{{asset('img/Layer 7.png')}}" >
                    </div>

                </div>
                <div class="col-lg-2">
                    <div class="brandItems">
                        <img src="{{asset('img/Layer 8.png')}}" >
                    </div>

                </div>
                <div class="col-lg-2">
                    <div class="brandItems">
                        <img src="{{asset('img/Layer 9.png')}}" >
                    </div>

                </div>
                <div class="col-lg-2">
                    <div class="brandItems">
                        <img src="{{asset('img/Layer 10.png')}}" >
                    </div>

                </div>
                <div class="col-lg-2">
                    <div class="brandItems">
                        <img src="{{asset('img/Layer 11.png')}}" >
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
                    <img src="{{asset('img/woman.png')}}" >
                </div>
                <div class="col-lg-3">
                    <p class="quote">Sed un perspiciatis <br> unde omnis iste natus error sit <br>voluptatem accusantium doloremque</p>

                    <p class="name">Sandra Dewi</p>
                    <p class="profession">fashion stylist</p>
                </div>
                <div class=" col-lg-3">
                    <p class="quote" align="right">Sed un perspiciatis <br> unde omnis iste natus error sit <br>voluptatem accusantium doloremque</p>
                    <p class="name" align="right">Shaheer Sheikh</p>
                    <p class="profession" align="right">designer</p>

                </div>
                <div class="col-lg-3">
                    <img src="{{asset('img/man.png')}}" >
                </div>
            </div>

        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <p>shops</p>
                        <ul>
                            <li>New In</li>
                            <li>Women</li>
                            <li>Men</li>
                            <li>Shoes</li>
                            <li>Bags & Accessories</li>
                            <li>Top Brands</li>
                            <li>Sale & Special Offers</li>
                            <li>Lookbook</li>
                        </ul>

                    </div>
                    <div class="col-lg-2">
                        <p>information</p>
                        <ul>
                            <li>About us</li>
                            <li>Customer Service</li>
                            <li>New Collection</li>
                            <li>Best Sellers</li>
                            <li>Manufacturers</li>
                            <li>Privacy policy</li>
                            <li>Terms & Condition</li>
                            <li>Blog</li>
                        </ul>

                    </div>
                    <div class="col-lg-3">
                        <p>customer service</p>
                        <ul>
                            <li>Search Terms</li>
                            <li>Advanced Search</li>
                            <li>Orders and Returns</li>
                            <li>Contact Us</li>
                            <li>RSS</li>
                            <li>Help & FAQs</li>
                            <li>Consultant</li>
                            <li>Store Locations</li>
                        </ul>

                    </div>
                    <div class="col-lg-3">
                        <p class="stayConnect">stay connected</p>
                        <div class="row socialMedias">
                            <div class="col-2">
                                <a href="" class="socialFooter"><i class="fab fa-facebook-f"></i></a>
                            </div>
                            <div class="col-2">
                                <a href="" class="socialFooter"><i class="fab fa-twitter"></i></a>
                            </div>
                            <div class="col-2 ">
                                <a href="" class="socialFooter"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                            <div class="col-2">
                                <a href="" class="socialFooter"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="col-2">
                                <a href="" class="socialFooter"><i class="fas fa-rss"></i></a>
                            </div>

                        </div>
                        <p class="stayConnect">subscribe in our news letter</p>
                        <div class="emailInput row">
                            <input type="text" placeholder="Enter Your Email Address" class="inputField col-lg-8">
                            <button type="submit" class="subscribeButton col-lg-4">Subscribe</button>
                        </div>

                    </div>
                </div>
                <div class="thinLineInFooter"></div>
                <div class="row">
                    <div class="triangle-footer"></div>
                </div>
                <div class="rightsSignBlock">
                    <span class="rightsSign">@2018 Shophia Fashion Store Shopify.<br></span>
                    <span class="rightsSign">All Rights Reserved. Ecommerce Software by Shopify.<br></span>
                    <span class="rightsSign">Designed by MoccalLabs.com<br></span>
                </div>
                <div class="row ">
                    <div class="col-2 row">
                        <div class="col-3">
                            <a href="" class="payment"><i class="fab fa-cc-visa"></i></a>
                        </div>
                        <div class="col-3">
                            <a href="" class="payment"><i class="fab fa-cc-mastercard"></i></a>
                        </div>
                        <div class="col-3 ">
                            <a href="" class="payment"><i class="fab fa-cc-amex"></i></a>
                        </div>
                        <div class="col-3">
                            <a href="" class="payment"><i class="fab fa-cc-discover"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>


<script src="{{mix('js/app.js')}}"></script>


</body>
</html>