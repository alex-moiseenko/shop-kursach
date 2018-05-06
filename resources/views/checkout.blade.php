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
            <h5>Returning customer</h5>
            <div class="thinline"></div>
            <a href="">Click here</a>
            <div class="thinline"></div>
            <h5>New customer</h5>
            <div class="thinline"></div>
            <form>
                <div class="form-group row">
                    <label for="inputFirstName" class="col-sm-2  col-form-label">First name</label>
                    <div class="col-sm-10 ">
                        <input type="text" class="form-control" id="inputFirstName" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputLastName" class="col-sm-2 col-form-label">Last name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputLastName" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="inputPhone" placeholder="">
                    </div>
                </div>

                <div class="thinline"></div>
                <h5>Delivery address</h5>
                <div class="thinline"></div>

                <div class="form-group row">
                    <label for="inputCountry" class="col-sm-2 col-form-label">Country</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputCountry" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputRegion" class="col-sm-2 col-form-label">Region</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputRegion" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputCity" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputCity" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputAddress" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputNP" class="col-sm-2 col-form-label">Nova Poshta depot</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNP" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputComments" class="col-sm-2 col-form-label">Comments</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="inputComments" rows="3"></textarea>
                    </div>
                </div>


                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Delivery</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="inputExpressDelivery" value="option1" checked>
                                <label class="form-check-label" for="inputExpressDelivery">
                                    Express delivery
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="inputNovaPoshta" value="option2">
                                <label class="form-check-label" for="inputNovaPoshta">
                                    Nova Poshta
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Payment </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios2" id="inputPrepayment" value="option1" checked>
                                <label class="form-check-label" for="inputPrepayment">
                                    Prepayment
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios2" id="inputCash" value="option2">
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
        <div class="col-lg-4 yourOrder">
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





