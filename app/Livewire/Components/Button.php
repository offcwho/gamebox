<?php

namespace App\Livewire\Components;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Button extends Component
{
    public $sum;
    public function mount($sum){
        $this->sum = $sum;
    }
    public function render()
    {
        if($this->sum > 0){
            return view('livewire.components.button', [
                'type' => 'enabled'
            ]);
        }else{
            return view('livewire.components.button', [
                'type' => 'disabled'
            ]);
        }
    }
}
