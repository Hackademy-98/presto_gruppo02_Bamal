<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class FormProducts extends Component
{

    public $img;
    public $name;
    public $description;
    public $category;
    public $condition;
    public $price;

    public function store(){
        Product::create([
            'img'=>$this->img ? $this->img->store('public/images'):'public/images/default.png'
        ]);
    }

    public function render()
    {
        return view('livewire.form-products');
    }
}
