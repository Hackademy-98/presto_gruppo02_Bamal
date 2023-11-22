<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class FormProducts extends Component
{

    public $img;
    public $name;
    public $description;
    public $category_id;
    public $condition;
    public $price;

    public $categories;
    
    protected $rules = [
        // "img"=>'image',
        "name"=>'required|min:5',
        "description"=>'required|min:10|max:255',
        //  "category"=>'required',
        "condition"=>'required',
        "price"=>'required|decimal:0,2',

    ];

     protected $messages = [
        "required"=>"Il campo :attribute è necessario",
       "min"=>"Il campo :attribute ha un numero insufficiente di caratteri",
        "max"=>"Il campo :attribute deve contenere massimo 255 caratteri",
        
        
    ];

    public function store(){
        $this->validate();
        if(Auth::user()){
        Product::create([
            'img'=>$this->img ? $this->img->store('public/images'):'public/images/default.png',
            'name'=>$this->name,
            'description'=>$this->description,
            'category_id'=>$this->category_id,
            'user_id'=>Auth::user()->id,
            'condition'=>$this->condition,
            'price'=>$this->price
        ]);

        $this->reset();
        session()->flash('success', 'Annuncio creato con successo');
    }else{
        session()->flash('error', 'Non sei autorizzato');
    }}
    

    public function render()
    {
       $this->categories= Category::all();
        return view('livewire.form-products');
    }
}
