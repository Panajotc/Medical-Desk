<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Buttons extends Component
{
    public $value;
    public $btn;
    public function mount($value,$btn){
        $this->value=$value;
        $this->btn=$btn;
        
    } 
    public function render()
    {
        return view('livewire.buttons');
    }
}
