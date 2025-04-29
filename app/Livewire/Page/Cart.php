<?php

namespace App\Livewire\Page;

use App\Models\Cart as ModelsCart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    public function render()
    {
        $carts = ModelsCart::where('user_id', Auth::user()->id)->get();
        $orders = Order::where('user_id', Auth::user()->id)->get();
        $sum = 0;
        foreach($carts as $cart){
            $sum = $sum + $cart->product->price;
        }
        return view('livewire.page.cart', [
            'sum' => $sum,
            'carts' => $carts,
            'orders' => $orders
        ]);
    }
}
