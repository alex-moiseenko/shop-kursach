<header>
    <div class="container-fluid top-line">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-3">
                    <i class="fas fa-phone phone"></i><span>Call +30121313123</span>
                </div>
                <div class="col-lg-5 offset-lg-4">
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
    @if (session('status'))
        <div class="container-fluid alert alert-success">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {{ session('status') }}
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center justify-content-between py-4">
                <div class="col-3 col-sm-3 col-md-4 menu-button">
                    <input type="checkbox" id="hmt" class="hidden-menu-ticker">
                    <label class="btn-menu" for="hmt">
                        <span class="first"></span>
                        <span class="second"></span>
                        <span class="third"></span>
                    </label>
                    <ul class="hidden-menu">
                        <li class="nav-item"><a href="#">Home</a></li>
                        <li class="nav-item"><a href="#">Gallery</a></li>
                        <li class="nav-item"><a href="#">Categories</a></li>
                        <li class="nav-item"><a href="#">Pages</a></li>
                        <p></p>
                        <li class="nav-item"><a href="#">My Account</a></li>
                        <li class="nav-item"><a href="#">Login</a></li>
                        <li class="nav-item"><a href="#">My Wishlist</a></li>
                    </ul>

                </div>
                <div class="col-md-4 col-lg-4 menu">
                    <div class="row">
                        <div class="col-3">
                            <a href="{{route('index')}}">Home</a>
                        </div>
                        <div class="col-3">
                            <a href="{{route('catalog')}}">Gallery</a>
                        </div>
                        <div class="col-3">
                            <a href="{{route('categories')}}">Categories</a>
                        </div>
                        <div class="col-3">
                            <a href="#" class="text-muted">Pages</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-4">
                    <div class="row">
                        <a href="{{route('index')}}" class="logo">
                            <img src="{{asset('img/Shophia.png')}}" alt="logo" class="m-auto">
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-5 col-sm-5 col-md-6 col-lg-6 offset-3 offset-sm-3 offset-md-3 offset-lg-3">
                            <div class="row socialHeader">
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
                        <div class="col-4 col-sm-4 col-md-3 col-lg-3 cart get-cart p-0">
                            <i class="fas fa-2x fa-shopping-cart"></i>
                            @if(isset($cart))
                                <span class="cart-count cart-total-count">{{$cart->totalQty}}</span>
                            @else
                                <span class="cart-count cart-total-count">0</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</header>