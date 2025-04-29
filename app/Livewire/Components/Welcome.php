<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Welcome extends Component
{
    public $data;

    public function mount($data)
    {
        $this->data = $data;
    }
    public function render()
    {
        return view('livewire.components.welcome', [
            'data' => $this->data
        ]);
    }
}
