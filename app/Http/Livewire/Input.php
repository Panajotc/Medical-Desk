<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Input extends Component
{
    public $text1;
    public $name;
    public function mount($text,$name){
        $this->text1=$text;
        $this->name=$name;
    } 
    
    
    public function render()
    {
        return view('livewire.input');
    }
}
