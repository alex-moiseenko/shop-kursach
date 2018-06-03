<form action="{{route('catalog-filter')}}" method="GET">
    @csrf
    <div class="row">
        <div class="categoryFilter filterBlock col-12">
            <h5>Categories</h5>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Coats & Jackets" id="cat1"
                       name="category[]" @if(isset($filters) && isset($filters['category']) && in_array('Coats & Jackets',$filters['category'])) checked @endif>
                <label class="form-check-label" for="cat1">Coats & Jackets</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Dresses" id="cat2"
                       name="category[]" @if(isset($filters) && isset($filters['category']) && in_array('Dresses',$filters['category'])) checked @endif>
                <label class="form-check-label" for="cat2">Dresses</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Sweatshirts" id="cat3"
                       name="category[]" @if(isset($filters) && isset($filters['category']) && in_array('Sweatshirts',$filters['category'])) checked @endif>
                <label class="form-check-label" for="cat3">Sweatshirts</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Jeans" id="cat4"
                       name="category[]" @if(isset($filters) && isset($filters['category']) && in_array('Jeans',$filters['category'])) checked @endif>
                <label class="form-check-label" for="cat4">Jeans</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Jumpers & Cardigans" id="cat5"
                       name="category[]" @if(isset($filters) && isset($filters['category']) && in_array('Jumpers & Cardigans',$filters['category'])) checked @endif>
                <label class="form-check-label" for="cat5">Jumpers & Cardigans</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Shorts" id="cat6"
                       name="category[]" @if(isset($filters) && isset($filters['category']) && in_array('Shorts',$filters['category'])) checked @endif>
                <label class="form-check-label" for="cat6">Shorts</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Skirts" id="cat7"
                       name="category[]" @if(isset($filters) && isset($filters['category']) && in_array('Skirts',$filters['category'])) checked @endif>
                <label class="form-check-label" for="cat7">Skirts</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Tops" id="cat8"
                       name="category[]" @if(isset($filters) && isset($filters['category']) && in_array('Tops',$filters['category'])) checked @endif>
                <label class="form-check-label" for="cat8">Tops</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Accessories" id="cat9"
                       name="category[]" @if(isset($filters) && isset($filters['category']) && in_array('Accessories',$filters['category'])) checked @endif>
                <label class="form-check-label" for="cat9">Accessories</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Shoes" id="cat10"
                       name="category[]" @if(isset($filters) && isset($filters['category']) && in_array('Shoes',$filters['category'])) checked @endif>
                <label class="form-check-label" for="cat10">Shoes</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="sizeFilter filterBlock col-12">
            <h5>Size</h5>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="XS" id="size1" name="size[]"
                       @if(isset($filters) && isset($filters['size']) && in_array('XS',$filters['size'])) checked @endif>
                <label class="form-check-label" for="size1">XS</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="S" id="size2" name="size[]"
                       @if(isset($filters) && isset($filters['size']) && in_array('S',$filters['size'])) checked @endif>
                <label class="form-check-label" for="size2">S</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="M" id="size3" name="size[]"
                       @if(isset($filters) && isset($filters['size']) && in_array('M',$filters['size'])) checked @endif>
                <label class="form-check-label" for="size3">M</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="L" id="size4" name="size[]"
                       @if(isset($filters) && isset($filters['size']) && in_array('L',$filters['size'])) checked @endif>
                <label class="form-check-label" for="size4">L</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="XL" id="size5" name="size[]"
                       @if(isset($filters) && isset($filters['size']) && in_array('XL',$filters['size'])) checked @endif>
                <label class="form-check-label" for="size5">XL</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 priceFilter">
            <h5>Price Range</h5>
            <div class="col-10">
                <div class="priceFilter filterBlock row align-items-center">
                    <div class="col-4 px-0"><input type="number" min="0" max="{{$max}}" @if(isset($filters) && isset($filters['price-from'])) value="{{$filters['price-from']}}" @else value="0" @endif class="form-control" name="price-from"></div>
                    <div class="col-2 text-center p-0">to</div>
                    <div class="col-4 px-0"><input type="number" min="0" max="{{$max}}" @if(isset($filters) && isset($filters['price-to'])) value="{{$filters['price-to']}}" @else value="{{$max}}" @endif class="form-control" name="price-to"></div>
                    <div class="col-2">$</div>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-info" type="submit">Search</button>
</form>