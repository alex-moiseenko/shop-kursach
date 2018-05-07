<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller {

    public function addItem(Request $request)
    {
        $id = $request->input('id');
        $size = $request->input('size');
        $item = Product::find($id);

        $oldCart = session()->has('cart') ? session()->get('cart') : null;

        $cart = new Cart($oldCart);

        $cart->add($item, $id, $size);

        session()->put('cart', $cart);
        session()->save();

        $totalQty = $cart->totalQty;
        $totalPrice = $cart->totalPrice;
        $lastItem = $cart->lastItem;

        $item_count = $cart->items[$id.'-'.$size]['qty'];


        //возращаемый масив для AJAX запроса
        $arr = ['totalQty' => $totalQty, 'totalPrice' => $totalPrice, 'lastItem' => $lastItem, 'item_count' => $item_count, 'size' => $size];

//        dd(session()->get('cart'));
        return ($arr);

    }

    public function remove(Request $request)
    {
        $id = $request->input('id');
        $oldCart = session()->has('cart') ? session()->get('cart') : null;

        $cart = new Cart($oldCart);

        $cart->remove($id);

        session(['cart' => $cart]);
        session()->save();

        $totalQty = $cart->totalQty;
        $totalPrice = $cart->totalPrice;

        $arr = ['totalQty' => $totalQty, 'totalPrice' => $totalPrice];

        return ($arr);

        //dd(session()->get('cart'));
    }

    public function item_count(Request $request)
    {
        $id = $request->input('id');
        $count = $request->input('qty');
        $oldCart = session()->has('cart') ? session()->get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->item_count($id, $count);

        session(['cart' => $cart]);
        session()->save();

        $totalQty = $cart->totalQty;
        $totalPrice = $cart->totalPrice;

        $arr = ['totalQty' => $totalQty, 'totalPrice' => $totalPrice];

        return ($arr);

    }

    public function getCart()
    {

        //$cart = session()->get('cart');

        if (session()->has('cart') and !empty(session()->get('cart')->items))
        {
            $cart = session()->get('cart');
            return view('cart.content', compact('cart'));
        } else
        {
            return view('cart.empty');
        }
    }

    public function checkout(Request $request)
    {
        $cart = session()->get('cart');

        foreach ($cart->items as $item)
        {
            $items[] = [
                "id"       => $item['item_id'],
                "name"     => $item['item']['name_ru'],
                "quantity" => $item['qty'],
                "price"    => $item['price']
            ];
        }

        $cartTotalPrice = $cart->totalPrice;
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $payment = $request->input('payment');
        $address = $request->input('address');
        $comment = $request->input('comment');
        if (empty($comment))
        {
            $comment = "";
        }

        $user_id = DB::table('customers')->insertGetId([
                'name'       => $name,
                'email'      => $email,
                'phone'      => $phone,
                'address'    => $address,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]
        );


        $transaction = DB::table('orders')->insertGetId([
            'customer_id' => $user_id,
            'cart'        => json_encode($cart->items, JSON_UNESCAPED_UNICODE),
            'payment'     => $payment,
            'comment'     => $comment,
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);


        $data = [
            'cart'    => $cart,
            'name'    => $name,
            'email'   => $email,
            'payment' => $payment,
            'phone'   => $phone,
            'address' => $address,
            'comment' => $comment,
        ];

//        письмо заказчику
        Mail::send('email.checkout', $data, function ($message) use ($data) {
            $message->from('order@vognyar.com.ua');
            $message->to($data['email']);
            $message->subject('Дякуємо за Ваше замовлення!');
        });
//        письмо нам
        Mail::send('email.checkout_for_us', $data, function ($message) use ($data) {
            $message->from('order@vognyar.com.ua');
            $message->to('vognyar@gmail.com');
//            $message->cc('globa@vognyar.com');
//            $message->cc('kachalovskaya@osdirect.com.ua');
            $message->subject('Вогняр. Новая заявка с сайта');
        });


        $json = [
            'id'    => $transaction,
            'sum'   => $cartTotalPrice,
            'items' => $items
        ];

        $json = json_encode($json, JSON_UNESCAPED_UNICODE);

        session()->forget('cart');

        return $json;
    }
}
