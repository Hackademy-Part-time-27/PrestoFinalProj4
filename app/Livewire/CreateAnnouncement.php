<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateAnnouncement extends Component
{ 
    #[Validate]
    public $title;
    #[Validate]
    public $body;
    #[Validate]
    
    public $price;

 
    public function render()
    {
        return view('livewire.create-announcement');
    }
}
