<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    
    public $val=0;
    public function foo(){
        $this->val++;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
