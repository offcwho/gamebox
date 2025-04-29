<?php

namespace App\Livewire\Components;

use App\Models\Cart;
use Livewire\Component;

class DeleteButton extends Component
{
    public $id;
    public function mount($id)
    {
        $this->id = $id;
    }
    public function delete()
    {
        Cart::where('id', $this->id)->delete(); redirect('/cart');
    }
    public function render()
    {
        return view('livewire.components.delete-button');
    }
}
