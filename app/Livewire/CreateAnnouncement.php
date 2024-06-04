<?php

namespace App\Livewire;


use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFace;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Support\Facades\File;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateAnnouncement extends Component
{ 
    use WithFileUploads;
    
    #[Validate]
    public $title;
    #[Validate]
    public $body;
    #[Validate]
    public $price;
    public $category_id;

    #[Validate]
    public $temporary_images;

    #[validate]
    public $images= [];

    public $announcement;

    public $user_id = null;

    public function rules()
    {
       return [
            'title'=>'required|min:4',
            'body'=>'required|min:8',
            'price'=>'required',
            'category_id'=>'required',
            'temporary_images.*'=>'required|max:1024',
            'images.*' => 'required|max:1024'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Il campo titolo è obbligatorio!',
            'title.min'=>'Il titolo deve contenere almeno :min caratteri',
            'body.min'=>'La descrizione deve contenere almeno :min caratteri',
            'body.required'=>'Il campo Descrizione è obbligatorio!',
            'price.required'=>'Il campo Prezzo è obbligatorio!',
            'temporary_images.*.image' => 'Il File dev\'essere un\'immagine',
            'temporary_images.*.max' => 'Il File dev\'essere un\'immagine',
            'images.*.image' => 'Il File dev\'essere un\'immagine',
            'images.*.max' => 'Il File non deve superare i :max kBs',
           
        ];
    }

    public function updatedTemporaryImages(){
        if($this->validate(['temporary_images'=>'required|max:1024'])){
            foreach ($this->temporary_images as $photo) {
                $this->images[]=$photo; 
            }
        };
    }
    public function addAnnouncement()
    {
       
        $this->validate();
        //set user_id dell'utente
        
        $this->user_id = auth()->user()->id;
       // $announcement = Announcement::create($this->only('title','body','price','category_id','user_id'));
        $this->announcement = Category::find($this->category_id)->announcements()->create($this->validate());
        $announcement= Announcement::all()->sortByDesc('created_at')->first();
        $announcement->user_id = $this->user_id;
       
        $announcement->save();
      
        if(count($this->images)!==0){

            foreach($this->images as $image){
                //dd($image->path());
                    
                    $newFileName = "announcements/{$this->announcement->id}";
                    $newImage= $this->announcement->images()->create(['path'=>$image->store($newFileName, 'public')]);

                    dispatch(new RemoveFace($newImage->id));
                    dispatch(new ResizeImage($newImage->path, 300,300));
                    dispatch(new GoogleVisionSafeSearch($newImage->id));
                    dispatch(new GoogleVisionLabelImage($newImage->id));
            
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
 
        session()->flash('success','Annuncio creato correttamente');

        $this->clear();

    }

    public function clear()
    {
        $this->title='';
        $this->body='';
        $this->price='';
        $this->temporary_images = [];
        $this->images = [];
        $this->announcement = '';
        $this->category_id = '';

    }

    public function removeImage($key)
    {
        
        if(array_key_exists($key, $this->images)){
            unset($this->images[$key]);
        }
    }
 
    public function render()
    {
        $categories=Category::all();
        return view('livewire.create-announcement', compact('categories'));
    }
}
