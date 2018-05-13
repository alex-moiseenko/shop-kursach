@extends('master')

@section('title', 'Catalog')

@section('css')
    {{--<link rel="stylesheet" href="{{asset('css/custom.css')}}">--}}
@endsection

@section('main')
    <div class="container catalogContainer">
        <div class="row">

            <div class="thinlineFilt1"></div>
            <input type="checkbox" id="hft" class="hidden-filter-ticker">
            <label class="btn-filter" for="hft">Filters</label>

            <div class="thinlineFilt2"></div>

            <div class="col-md-4 col-lg-3 filters pb-4">
                @include('catalog.filter')
            </div>
            <div class="col-lg-9 catalogItems">
                @include('catalog.products')
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection




