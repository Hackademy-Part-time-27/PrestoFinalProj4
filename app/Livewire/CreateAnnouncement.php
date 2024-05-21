<?php

namespace App\Livewire;


use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Announcement;
use App\Models\Category;


class CreateAnnouncement extends Component
{ 
    #[Validate]
    public $title;
    #[Validate]
    public $body;
    #[Validate]
    public $price;
    public $category_id;

    public $user_id = null;

    public function rules()
    {
       return [
            'title'=>'required',
            'body'=>'required',
            'price'=>'required',
            'category_id'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Il campo titolo è obbligatorio!',
            'body.required'=>'Il campo Descrizione è obbligatorio!',
            'price.required'=>'Il campo Prezzo è obbligatorio!',
        ];
    }

    public function addAnnouncement()
    {
        $this->validate();

        $this->user_id = auth()->user()->id;

        $announcement = Announcement::create($this->only('title','body','price','category_id','user_id'));
 
        session()->flash('success','Annuncio creato correttamente');

        $this->clear();

    }

    public function clear()
    {
        $this->title='';
        $this->body='';
        $this->price='';
    }
 
    public function render()
    {
        $categories=Category::all();
        return view('livewire.create-announcement', compact('categories'));
    }
}
