@extends ('voyager::master')

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('content')

    <div class="container-fluid custom-admin">

        <h1 class="page-title"><i class="voyager-shop"></i> Products</h1>
        <a href="{{route('create_product')}}" class="btn btn-success btn-add-new">
            <i class="voyager-plus"></i>
            <span>Добавить</span>
        </a>
        <div class="row">
            @if (session('status'))
                <div class="col-12">
                    <div class="alert alert-success col-12">
                        {{ session('status') }}
                    </div>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Img</th>
                                <th scope="col">Название</th>
                                <th scope="col">Категория</th>
                                <th scope="col">Наличие</th>
                                <th>Цена</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <th scope="row">{{$product->product_id}}</th>
                                    <td><img style="height: 100px" src="{{asset($product->main_img)}}" alt=""></td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category}}</td>
                                    <td>
                                        @if($product->available)
                                            <span style="color: #00d000">В наличии</span>
                                        @else
                                            <span style="color: gray">нет в наличии</span>
                                        @endif
                                    </td>
                                    <td>{{$product->price}}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a class="btn btn-info"
                                               href="{{url('/admin/products/'.$product->product_id)}}">Изменить</a>
                                            <a class="btn btn-danger"
                                               href="{{url('/admin/products/delete/'.$product->product_id)}}">Удалить</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="col-12 d-flex justify-content-center">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection