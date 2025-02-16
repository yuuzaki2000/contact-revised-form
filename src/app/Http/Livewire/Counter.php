<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 20;
    public $show = false;

    public function inc(){
        $this->count++;
    }

    public function changeShow(){
        $this->show = !$this->show;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
