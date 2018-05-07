<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" id="cart_body">
            @if(isset($cart) && $cart->totalQty > 0)
                @include('cart.content')
            @else
                @include('cart.empty')
            @endif
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            <button type="button" class="btn btn-primary order" @if(!isset($cart) || $cart->totalQty < 0) disabled @endif>Оформить</button>
        </div>
    </div>
</div>