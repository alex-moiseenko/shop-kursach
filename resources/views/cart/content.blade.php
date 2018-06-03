{{--@php(dd($cart))--}}

<div class="row">
    @if($cart->totalQty !== 0)
        <div class="col">У вас в корзине <span class="cart-total-count">{{$cart->totalQty}}</span> товар(-ов)</div>
    @else
        <div class="col">
            Ваша корзина пуста!
        </div>
    @endif
</div>
<hr>

@foreach($cart->items as $item)

    @if($item['qty'] !== 0)
        <div class="row align-items-center py-1" id="cart-item-{{$item['item_id']}}">

            <div class="col-2 image">
                <img src="{{asset($item['item']->main_img)}}" alt="">
            </div>
            <div class="col-4 title">
                <h5>{{$item['item']->name.'('.$item['size'].')'}}</h5>
            </div>
            <div class="col-2">
                <span class="minus d-inline-block" data-id="{{$item['item_id']}}">-</span>
                <input type="number" class="qty d-inline-block" value="{{$item['qty']}}" data-id="{{$item['item_id']}}">
                <span class="plus d-inline-block" data-id="{{$item['item_id']}}">+</span>
            </div>
            <div class="col-2 price">
                <span class="price">${{$item['price']}}</span>
            </div>
            <div class="col-2">
                <span class="delete text-danger" data-id="{{$item['item_id']}}">Remove</span>
            </div>
        </div>
    @endif
@endforeach
<hr>
<div class="row text-right">

    @if($cart->totalPrice !== 0)
        <div class="col">
            <h4>Total: $<span class="cart-total-price">{{$cart->totalPrice}}</span></h4>
        </div>
    @else
        <div class="col">
            <h4>Total: $<span class="cart-total-price">0</span></h4>
        </div>
    @endif
</div>