<?php

namespace App\Livewire\Components;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartButton extends Component
{
    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }

    public function add()
    {
        Cart::create([
           'product_id' => $this->id,
           'user_id' => Auth::user()->id,
           'in_cart' => true
        ]);
    }
    public function remove()
    {
        Cart::where('user_id', Auth::user()->id)->where('product_id', $this->id)->delete();
    }
    public function render()
    {
        if(Auth::user()){
            $cart = Cart::where('product_id', $this->id)->where('user_id', Auth::user()->id)->where('in_cart', true)->get();
            $sum = 0;
            foreach($cart as $value){
                $sum++;
            }
            if($sum > 0){
                return view('livewire.components.cart-button', [
                    'method' => 'remove',
                    'buttonText' => 'Удалить',
                    'background' => 'bg-slate-50 text-black'
                ]);
            }else{
                return view('livewire.components.cart-button', [
                    'method' => 'add',
                    'buttonText' => 'Купить',
                    'background' => 'bg-[#FF6767] text-white'
                ]);
            }
        }
    }
}
