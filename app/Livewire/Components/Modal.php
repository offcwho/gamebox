<?php

namespace App\Livewire\Components;

use App\Http\Requests\OrderRequest;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Modal extends Component
{
    public $form = [];

    public function buy()
    {
        $request = new OrderRequest();

        $validated = $this->validate(
            $request->rules(),
            $request->messages()
        );

        $cart = Cart::where('user_id', Auth::user()->id)->get();
        foreach($cart as $product){
            Order::create(
               [
                ...$validated['form'],
                'product_id' => $product->product_id,
                'user_id' => Auth::user()->id,
                'is_pay' => false,
               ]);
        }
        Cart::where('user_id', Auth::user()->id)->delete();
        redirect('/cart');
    }
    public function render()
    {
        return view('livewire.components.modal');
    }
}
