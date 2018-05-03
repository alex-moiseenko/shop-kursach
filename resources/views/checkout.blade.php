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

@endsection

@section('js')
    {{--если необходим js только для одной страницы, подключай тут--}}
@endsection





