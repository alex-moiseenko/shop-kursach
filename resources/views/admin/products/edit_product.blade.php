@extends ('voyager::master')

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('content')

    <div class="container-fluid custom-admin">
        <h1 class="page-title"><i class="voyager-edit"></i>Изменить товар</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <form action="{{route('edit_product')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="text" hidden name="id" value="{{$product->id}}">
                            <div class="form-group">
                                <label for="name">Имя товара:</label>
                                <input type="text" class="form-control" id="name" name="name" required
                                       value="{{$product->name}}">
                            </div>
                            <div class="form-group">
                                <label for="main_img">Фото товара:</label>
                                <div>
                                    <img src="{{asset($product->main_img)}}" style="height: 200px" alt="">
                                </div>
                                <input type="file" accept="image/*" class="form-control-file" id="main_img"
                                       name="main_img">
                            </div>
                            <div class="form-group">
                                <label for="additional_img">Дополнительные фото:</label>
                                <div>
                                    @if($product->additional_img != 'null')
                                        @foreach(json_decode($product->additional_img) as $image)
                                            <img src="{{asset($image)}}" style="height: 200px" alt="">
                                        @endforeach
                                    @endif
                                </div>
                                <input type="file" accept="image/*" class="form-control-file" id="additional_img"
                                       name="additional_img[]" multiple>
                            </div>
                            <div class="form-group">
                                <label for="description">Описание</label>
                                <textarea class="form-control" id="description" name="description" rows="3"
                                          required>{{$product->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Цена:</label>
                                <input type="number" class="form-control" id="price" name="price" required
                                       value="{{$product->price}}">
                            </div>
                            <div class="form-group">
                                <label for="price_with_sale">Цена со скидкой:</label>
                                <input type="number" class="form-control" id="price_with_sale" name="price_with_sale"
                                       value="{{$product->price_with_sale}}">
                            </div>
                            <div class="form-group">
                                <label for="sale">Скидка(%):</label>
                                <input type="number" class="form-control" id="sale" name="sale"
                                       value="{{$product->sale}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Катагория:</label>
                                <select class="form-control" id="exampleFormControlSelect1" required name="category">
                                    <option disabled>Select</option>
                                    <option @if($product->category === "Coats & Jackets") selected
                                            @endif value="Coats & Jackets">Coats & Jackets
                                    </option>
                                    <option @if($product->category === "Dresses") selected @endif value="Dresses">
                                        Dresses
                                    </option>
                                    <option @if($product->category === "Sweatshirts") selected
                                            @endif value="Sweatshirts">Sweatshirts
                                    </option>
                                    <option @if($product->category === "Jeans") selected @endif value="Jeans">Jeans
                                    </option>
                                    <option @if($product->category === "Jumpers & Cardigans") selected
                                            @endif value="Jumpers & Cardigans">Jumpers & Cardigans
                                    </option>
                                    <option @if($product->category === "Shorts") selected @endif value="Shorts">Shorts
                                    </option>
                                    <option @if($product->category === "Skirts") selected @endif value="Skirts">Skirts
                                    </option>
                                    <option @if($product->category === "Tops") selected @endif value="Tops">Tops
                                    </option>
                                    <option @if($product->category === "Accessories") selected
                                            @endif value="Accessories">Accessories
                                    </option>
                                    <option @if($product->category === "Shoes") selected @endif value="Shoes">Shoes
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="color">Цвет:</label>
                                <input type="color" class="form-control" id="color" name="color" required
                                       value="{{$product->color}}">
                            </div>
                            <div class="form-group">
                                <label for="color">Размеры:</label>
                                <div class="form-check form-check-inline">
                                    <input @if($sizes->has(1)) checked @endif class="form-check-input" type="checkbox"
                                           id="size1" value="1" name="sizes[]">
                                    <label class="form-check-label" for="size1">XS</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input @if($sizes->has(2)) checked @endif class="form-check-input" type="checkbox"
                                           id="size2" value="2" name="sizes[]">
                                    <label class="form-check-label" for="size2">S</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input @if($sizes->has(3)) checked @endif class="form-check-input" type="checkbox"
                                           id="size3" value="3" name="sizes[]">
                                    <label class="form-check-label" for="size3">M</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input @if($sizes->has(4)) checked @endif class="form-check-input" type="checkbox"
                                           id="size4" value="4" name="sizes[]">
                                    <label class="form-check-label" for="size4">L</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input @if($sizes->has(5)) checked @endif class="form-check-input" type="checkbox"
                                           id="size5" value="5" name="sizes[]">
                                    <label class="form-check-label" for="size5">XL</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="available">Наличие:</label>
                                <select class="form-control" id="available" name="available" required
                                        value="{{$product->available}}">
                                    <option @if($product->available === 1) selected @endif value="1">Есть в наличии
                                    </option>
                                    <option @if($product->available === 0) selected @endif value="0">Нет в наличии
                                    </option>
                                </select>
                            </div>
                            <button class="btn btn-success" type="submit" id="createBtn">Сохранить</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('javascript')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#createBtn').click(function () {
                let checked = $("input[type=checkbox]:checked").length;
                if (!checked) {
                    alert("Вы должны выбрать хотябы один размер");
                    return false;
                }
            });
        });
    </script>
@endsection