form.on('submit', function (e) {
    e.preventDefault();
    var form_val = form.serialize(),
        action = form.attr('action');
    $('.loader').css('display', 'block');
    $.ajax({
        type: "POST",
        url: action,
        data: form_val,
        dataType: 'json',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    }).done(function (data) {

        $('.loader').css('display', 'none');
        modal_order.modal('hide');
        modal_order.on('hidden.bs.modal', function (e) {

            swal("Thank you for your order", "", "success").then((willDelete) => {
                window.location.href = "";
            });
        });
    }).fail(function () {
        swal("Oops! There was an error, please update page and try again.", "", "success");
        console.log('fail');
    });
});

var modal_cart = $('#cart');

//get cart
$('.get-cart').click(function () {
    $.ajax({
        type: "GET",
        url: '',
        dataType: 'text',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    }).done(function (data) {
        modal_cart.html(data);
        modal_cart.modal('show');
        gtag('event', '606 Basket', {'event_category': 'basket', 'event_action': 'click',});
    }).fail(function () {
        console.log('fail');
    });
});
//delete from cart
modal_cart.on('click', '.delete', function () {
    var id = $(this).data('delete');
    deleteFromCart(id);
});

function deleteFromCart(id) {
    $.ajax({
        type: "GET",
        url: '',
        data: {id: id},
        dataType: 'json',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    }).done(function (data) {
        $('.cart-item-' + id).slideUp('slow');
        console.log(data.totalPrice);
        $('.cart-total-price').html(data.totalPrice);
        $('.cart-total-count').html(data.totalQty);
        $('.cart-count').html(data.totalQty);

        $('.buy-block-' + id).html('<span class="count"></span><img class="buy" data-id="' + id + '" src="img/icons/Button1.png">');

        if(data.totalQty == 0) {
            $('.cart-count').css('visibility', 'hidden');
            $('.order').attr("disabled", true);
        }
    }).fail(function () {
        console.log('fail');
    });
}

modal_cart.on('click', '.minus', function () {
    console.log('test');
    var qty_el = $(this).parent().find('.qty'),
        qty = parseInt(qty_el.val()) - 1,
        id = qty_el.data('id');
    console.log(qty);
    if (qty <= 0) {
        deleteFromCart(id);
    } else {
        changeQty(id, qty);
        qty_el.val(qty);
    }
});

modal_cart.on('click', '.counter > .plus', function () {
    var qty_el = $(this).parent().find('.qty'),
        qty = parseInt(qty_el.val()) + 1,
        id = qty_el.data('id');
    qty_el.val(qty);
    changeQty(id, qty);
});

modal_cart.on('change', '.qty', function () {
    var id = $(this).data('id'),
        qty = $(this).val();
    if (qty <= 0) {
        deleteFromCart(id)
    } else {
        changeQty(id, qty);
    }
});

modal_cart.on('click', '.order', function () {
    modal_cart.modal('hide');
    gtag('event', '606 Oformlennya', {'event_category': 'oformlennya', 'event_action': 'click',});
    modal_cart.on('hidden.bs.modal', function (e) {
        modal_order.modal('show');
    });
});

$("#phone").mask("+38 (099) 999-99-99");

function changeQty(id, qty) {
    $.ajax({
        type: "GET",
        url: '',
        data: {id: id, qty: qty},
        dataType: 'json',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    }).done(function (data) {
        $('.cart-total-price').html(data.totalPrice);
        $('.cart-total-count').html(data.totalQty);
        $('cart-count').html(data.totalQty);
        if (qty == 0) {
            $('.buy-block-' + id).html('<span class="count"></span><img class="buy" data-id="' + id + '" src="img/icons/Button1.png">');
        } else {
            $('.buy-block-' + id).children('.count').html(qty);
        }
    }).fail(function () {
        console.log('fail');
    });
}

//buy
$('.flip-container, .item-ie, .gourman-set').on('click', '.buy', function () {
    var id = $(this).data('id'),
        cart_count = $('.cart-count'),
        buy_block = $('.buy-block-' + id),
        count = buy_block.find('span.count'),
        buy_btn = buy_block.find('img');
    $.ajax({
        type: "GET",
        url: '',
        data: {id: id},
        dataType: 'json',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    }).done(function (data) {
        cart_count.css('visibility', 'visible');
        cart_count.html(data.totalQty);
        count.html(data.item_count);
        fbq('track', 'AddToCart', {
            value: 1,
            currency: 'UAH',
        });
        $('.order').attr("disabled", false);

        buy_btn.attr("src", "/img/icons/Button2.png");

    }).fail(function () {
        console.log('fail');
    });
});
