<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Buttons extends Component
{
    public $value;
    public $btn;
    public $date;
    public function mount($value,$btn,$date){
        $this->value=$value;
        $this->btn=$btn;
        $this->date=$date;
    } 
    public function render()
    {
        return view('livewire.buttons');
    }
}
