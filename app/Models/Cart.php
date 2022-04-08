<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart
{
    use HasFactory;

    public $items=[];
    public $qty;
    public $price;
public function __construct($cart=null){
if($cart){
    $this->items=$cart->items;
    $this->qty=$cart->qty;
    $this->price=$cart->price;
}else{
    $this->items=[];
    $this->qty=0;
    $this->price=0;
}
}
public function addcart($product){
    $item=[
        'name'=>$product->name,
        'image'=>$product->image,
        'qty'=>0,
        'price'=>$product->price,
    ];
    if(!array_key_exists($product->id,$this->items)){
        $this->items[$product->id]=$item;
        $this->qty+=1;
        $this->price+=$product->price;
    }
    else{
        $this->qty+=1;
        $this->price+=$product->price;
    }
$this->items[$product->id]['qty']+=1;
}











}
