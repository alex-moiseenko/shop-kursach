@php
    if (session()->has('cart')){
    $cart = session()->get('cart');
    }
@endphp

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
                            <a href="{{route('index')}}">Home</a>
                        </div>
                        <div class="col-3">
                            <a href="{{route('catalog')}}">Gallery</a>
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
                        <a href="{{route('index')}}" class="logo">
                            <img src="{{asset('img/Shophia.png')}}" alt="logo" class="m-auto">
                        </a>
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
                        <div class="col-3 cart get-cart p-0">
                            <i class="fas fa-2x fa-shopping-cart"></i>
                            @if(isset($cart))
                                <span class="cart-count">{{$cart->totalQty}}</span>
                            @else
                                <span class="cart-count">0</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</header>