@extends ('voyager::master')

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('content')

    <div class="container-fluid custom-admin">
        <h1 class="page-title"><i class="voyager-plus"></i> Новый товар</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <form action="{{route('save_product')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Имя товара:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="main_img">Фото товара:</label>
                                <input type="file" accept="image/*" class="form-control-file" id="main_img"
                                       name="main_img" required>
                            </div>
                            <div class="form-group">
                                <label for="additional_img">Дополнительные фото:</label>
                                <input type="file" accept="image/*" class="form-control-file" id="additional_img"
                                       name="additional_img[]" multiple>
                            </div>
                            <div class="form-group">
                                <label for="description">Описание</label>
                                <textarea class="form-control" id="description" name="description" rows="3"
                                          required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Цена:</label>
                                <input type="number" class="form-control" id="price" name="price" required>
                            </div>
                            <div class="form-group">
                                <label for="price_with_sale">Цена со скидкой:</label>
                                <input type="number" class="form-control" id="price_with_sale" name="price_with_sale">
                            </div>
                            <div class="form-group">
                                <label for="sale">Скидка(%):</label>
                                <input type="number" class="form-control" id="sale" name="sale">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Катагория:</label>
                                <select class="form-control" id="exampleFormControlSelect1" required name="category">
                                    <option disabled selected>Select</option>
                                    <option value="Coats & Jackets">Coats & Jackets</option>
                                    <option value="Dresses">Dresses</option>
                                    <option value="Sweatshirts">Sweatshirts</option>
                                    <option value="Jeans">Jeans</option>
                                    <option value="Jumpers & Cardigans">Jumpers & Cardigans</option>
                                    <option value="Shorts">Shorts</option>
                                    <option value="Skirts">Skirts</option>
                                    <option value="Tops">Tops</option>
                                    <option value="Accessories">Accessories</option>
                                    <option value="Shoes">Shoes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="color">Цвет:</label>
                                <input type="color" class="form-control" id="color" name="color" required>
                            </div>
                            <div class="form-group">
                                <label for="color">Размеры:</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="size1" value="1" name="sizes[]">
                                    <label class="form-check-label" for="size1">XS</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="size2" value="2" name="sizes[]">
                                    <label class="form-check-label" for="size2">S</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="size3" value="3" name="sizes[]">
                                    <label class="form-check-label" for="size3">M</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="size4" value="4" name="sizes[]">
                                    <label class="form-check-label" for="size4">L</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="size5" value="5" name="sizes[]">
                                    <label class="form-check-label" for="size5">XL</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="available">Наличие:</label>
                                <select class="form-control" id="available" name="available" required>
                                    <option value="1">Есть в наличии</option>
                                    <option value="0">Нет в наличии</option>
                                </select>
                            </div>
                            <button class="btn btn-success" type="submit" id="createBtn">Создать</button>
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
            $('#createBtn').click(function() {
                let checked = $("input[type=checkbox]:checked").length;

                if(!checked) {
                    alert("Вы должны выбрать хотябы один размер");
                    return false;
                }

            });
        });
    </script>
@endsection