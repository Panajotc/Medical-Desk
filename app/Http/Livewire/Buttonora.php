<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Buttonora extends Component
{
    public $val;
    public $bt;
    public function mount($val,$bt){
        $this->val=$val;
        $this->bt=$bt;
    }
    public function render()
    {
        return view('livewire.buttonora');
    }
}
