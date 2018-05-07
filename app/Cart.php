<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model {

    public $lastItem = null;
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart) {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id, $size) {
        if(isset($item->sale) || $item->sale > 0){
            $price = floatval($item->price_with_sale);
        } else {
            $price = floatval($item->price);
        }

        $storedItem = ['item_id' => $id.'-'.$size, 'qty' => 0, 'price' => $price, 'item' => $item, 'size' => $size];
        if ($this->items) {
            if (array_key_exists($id.'-'.$size, $this->items)) {
                $storedItem = $this->items[$id.'-'.$size];
            }
        }

        $storedItem['qty']++;
        $this->items[$id.'-'.$size] = $storedItem;
        $this->lastItem = $item->name;
        $this->totalQty++;
        $this->totalPrice += $price;

    }

    public function item_count($id, $count) {
        //отнимаем цену * на старое количество
        $old_qty = $this->items[$id]['qty'];
        $old_total_qty = $this->totalQty;

        $price = $this->items[$id]['price'];

        $this->totalPrice = $this->totalPrice - ($price * $old_qty);
        $this->totalQty = $old_total_qty - $old_qty;
        //добавлем цену * новое количество
        $this->items[$id]['qty'] = $count;
        $this->totalPrice = $this->totalPrice + ($price * $count);
        $this->totalQty = $this->totalQty + $count;
    }

    public function remove($id) {

        $this->totalQty = $this->totalQty - $this->items[$id]['qty'];
        $this->totalPrice = $this->totalPrice - ($this->items[$id]['price'] * $this->items[$id]['qty']);

        unset($this->items[$id]);

    }
}
