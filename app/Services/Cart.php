<?php

namespace App\Services;

class Cart
{
    public int $totalQuantity = 0;
    public float $totalPrice = 0;
    public array $items = [];

    public function __construct($oldCart)
    {
        if ($oldCart){
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->items = $oldCart->items;
        }
    }
    public function add($item,$id)
    {
        $itemToStore = ['price'=>$item->price,'quantity'=>0,'item'=>$item];
        if ($this->items){
            if (array_key_exists($id,$this->items)){
                $itemToStore = $this->items[$id];
            }
        }
        $itemToStore['quantity']++;
        $itemToStore['price'] = $itemToStore['quantity'] * $item->price;
        $this->items[$id] = $itemToStore;

        //increment the total price and total quantity
        $this->totalQuantity ++;
        $this->totalPrice += $item->price;
    }


}
