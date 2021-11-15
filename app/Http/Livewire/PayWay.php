<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PayWay extends Component
{
    public $text1;

    public function mount($text){
        $this->text1=$text;
    } 
    
    public function render()
    {
        return view('livewire.pay-way');
    }
}
