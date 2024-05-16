<?php

namespace App\Livewire;


use Livewire\Attributes\Validate;
use Livewire\Component;


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
