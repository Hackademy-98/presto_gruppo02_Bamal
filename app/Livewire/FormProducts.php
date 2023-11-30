<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Condition;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class FormProducts extends Component
{

    use WithFileUploads;

    public $name;
    public $description;
    public $category;
    public $condition;
    public $price;

    public $temporary_images;
    public $images = [];

    public $categories;
    public $conditions;
    
    protected $rules = [
        "name"=>'required|min:5',
        "description"=>'required|min:10|max:255',
        "category"=>'required',
        "condition"=>'required',
        "price"=>'required|decimal:0,2',
        "temporary_images.*"=>'image|max:1024',
        "images.*"=>'image|max:1024'


    ];

     protected $messages = [
        "required"=>"Il campo è necessario",
        "min"=>"Il campo ha un numero insufficiente di caratteri",
        "max"=>"Il campo deve contenere massimo 255 caratteri",
        "temporary_images.*.image"=>'Il file deve essere un immagine',
        "temporary_images.*.max"=>'Il file deve essere massimo di 1mb',
        "images.image"=>'Il file deve essere un immagine',
        "images.max"=>'Il file deve essere massimo di 1mb',

    ];

    public function updatedTemporaryImages(){
        if ($this->validate(['temporary_images.*'=>'image|max:1024'])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key){
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }
    public function store(){
        $this->validate();

        $category = Category::find($this->category);   
        $condition = Condition::find($this->condition);
        

        $product = $category->products()->create([
        'name' => $this->name,
        'description' => $this->description,
        'user_id' => Auth::user()->id,     
        'price' => $this->price,
        ]);
        
        $condition->products()->save($product);

        if(count($this->images)){
            foreach ($this->images as $image) {
                $product->images()->create(['path'=>$image->store('images', 'public')]);
            }

        $product->user()->associate(Auth::user());

        $product->save();
        }
        

        $this->reset();
        session()->flash('success', 'Annuncio creato con successo');
    
        
    }

    public function render()
    {
        $this->categories= Category::all();
        $this->conditions= Condition::all();
        return view('livewire.form-products');
    }
}
