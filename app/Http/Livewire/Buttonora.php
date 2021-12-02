<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Buttonora extends Component
{
    public $val;
    public $bt;
    public $ora;
    public function mount($val,$bt,$ora){

        $this->val=$val;
        $this->bt=$bt;
        $this->ora=$ora;
    }
    public function render()
    {
        return view('livewire.buttonora');
    }
}
