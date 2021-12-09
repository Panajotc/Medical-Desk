<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Buttons extends Component
{
    public $btnvalue;
    public $btn;
    public $date;
    public function mount($btnvalue,$btn,$date){
        $this->btnvalue=$btnvalue;
        $this->btn=$btn;
        $this->date=$date;
    } 
    public function show($btn){
       
    }
    public function render()
    {
        return view('livewire.buttons');
    }
}
