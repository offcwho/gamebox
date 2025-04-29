<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class CardList extends Component
{
    public $limit;

    public function mount($limit){
        $this->limit = $limit;
    }
    public function getProductProperty()
    {
        return Product::where('is_active', true)->orderByDesc('created_at')->limit($this->limit)->get();
    }
    public function render()
    {
        return view('livewire.card-list',[
            'products' => $this->getProductProperty()
        ]);
    }
}
