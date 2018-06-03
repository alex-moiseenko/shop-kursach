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
        <div class="row justify-content-between">
            <div class="col-lg-7 customerData">
                {{--<h5>Returning customer</h5>--}}
                {{--<div class="thinline"></div>--}}
                {{--<a href="">Click here</a>--}}
                {{--<div class="thinline"></div>--}}
                <h5>New customer</h5>
                <div class="thinline"></div>
                <form action="{{route('checkout')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="inputFirstName" class="col-sm-3 col-form-label"><i style="color: red;">*</i>First name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputFirstName" placeholder="" required name="firstName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputLastName" class="col-sm-3 col-form-label"><i style="color: red;">*</i>Last name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputLastName" placeholder="" required name="lastName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label"><i style="color: red;">*</i>Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail" placeholder="" required name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPhone" class="col-sm-3 col-form-label"><i style="color: red;">*</i>Phone</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" id="inputPhone" placeholder="" required name="phone">
                        </div>
                    </div>

                    <div class="thinline"></div>
                    <h5>Delivery address</h5>
                    <div class="thinline"></div>

                    <div class="form-group row">
                        <label for="inputCountry" class="col-sm-3 col-form-label">Country</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputCountry" placeholder="" name="country">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputRegion" class="col-sm-3 col-form-label">Region</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputRegion" placeholder="" name="region">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCity" class="col-sm-3 col-form-label">City</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputCity" placeholder="" name="city">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAddress" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputAddress" placeholder="" name="address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNP" class="col-sm-3 col-form-label">Nova Poshta depot</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputNP" placeholder="" name="np">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputComments" class="col-sm-3 col-form-label">Comments</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="inputComments" rows="3" name="comment"></textarea>
                        </div>
                    </div>


                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-3 pt-0">Delivery</legend>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="delivery"
                                           id="inputExpressDelivery" value="express delivery" checked>
                                    <label class="form-check-label" for="inputExpressDelivery">
                                        Express delivery
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="delivery" id="inputNovaPoshta"
                                           value="nova poshta">
                                    <label class="form-check-label" for="inputNovaPoshta">
                                        Nova Poshta
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-3 pt-0">Payment</legend>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment" id="inputPrepayment"
                                           value="prepayment" checked>
                                    <label class="form-check-label" for="inputPrepayment">
                                        Prepayment
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment" id="inputCash"
                                           value="cash">
                                    <label class="form-check-label" for="inputCash">
                                        Cash
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 yourOrder align-self-start">
                <h5>Cart</h5>
                <div class="thinline"></div>
                @foreach($cart->items as $item)
                    <div class="row my-3">
                        <div class="col-3">
                            <img style="max-height: 100px; max-width: 60px" src="{{asset($item['item']->main_img)}}" alt="">
                        </div>
                        <div class="col-6">
                            <span>{{$item['item']->name.'('.$item['size'].')'}}</span><br>
                            <span style="font-size: 0.7em">Qty: {{$item['qty']}}</span>
                        </div>
                        <div class="col-3">
                            ${{$item['price']}}
                        </div>
                    </div>
                @endforeach
                <div class="thinline"></div>
                <div class="row">
                    <div class="col-9 cartText">Order value:</div>
                    <div class="col-3 money">${{$cart->totalPrice}}</div>
                </div>
                <div class="row">
                    <div class="col-9 cartText">Delivery:</div>
                    <div class="col-3 money">$5</div>
                </div>
                <div class="thinline"></div>
                <div class="row">
                    <div class="col-9 cartText">Total:</div>
                    <div class="col-3 money">${{$cart->totalPrice + 5}}</div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    {{--если необходим js только для одной страницы, подключай тут--}}
@endsection





