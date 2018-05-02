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


        </div>
    </div>

</header>


<div class="container checkoutPage">
    <div class="row">
        <div class="col-lg-7  customerData">
            <h5>Returning customer</h5>
            <div class="thinline"></div>
            <a href="">Click here</a>
            <div class="thinline"></div>
            <h5>New customer</h5>
            <div class="thinline"></div>
            <label class="labels">First name</label>
            <input type="text" >
            <br>
            <label class="labels">Last name</label>
            <input type="text">
            <br>
            <label class="labels">Email</label>
            <input type="text">
            <br>
            <label class="labels">Password</label>
            <input type="password">
            <br>
            <label class="labels">Phone number</label>
            <input type="text">

            <div class="thinline"></div>
            <h5>Delivery address</h5>
            <div class="thinline"></div>
            <label class="labels">Country</label>
            <input type="text">
            <br>
            <label class="labels">Region</label>
            <input type="text">
            <br>
            <label class="labels">City</label>
            <input type="password">
            <br>
            <label class="labels">Delivery address or NP depot number</label>
            <input type="text">
            <br>
            <label class="labels textareas">Comments</label>
            <textarea rows="3"></textarea>
            <br>

            <div class="thinline"></div>
            <h5>Delivery methods</h5>
            <div class="thinline"></div>

            <div>
                <input type="radio" name="deliveryMethod" value="express"><span class="delivery">Express delivery</span>
                <input type="radio" name="deliveryMethod" value="np"><span class="delivery">Nova Poshta</span>
            </div>

            <div class="thinline"></div>
            <h5>Payment</h5>
            <div class="thinline"></div>

            <div>
                <input type="radio" name="payingMethod" value="prepayment"><span class="payment">Prepayment</span>
                <input type="radio" name="payingMethod" value="cashPayment"><span class="payment">Cash Payment</span>
            </div>

            <div class="thinline"></div>
            <button type="submit" class="confirm-button">Confirm</button>
        </div>
        <div class=" offset-1 col-lg-4 yourOrder">
            <h5>Cart</h5>
            <div class="thinline"></div>

            <label class="cartText">Order value:</label><label class="money">$60,00</label><br>
            <label class="cartText">Delivery:</label><label class="money">$5,00</label><br>
            <div class="thinline"></div>
            <label class="cartText">Total:</label><label class="money">$65,00</label><br>

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





