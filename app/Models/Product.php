<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Condition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['img','name','description','category','condition','price','user_id', 'category_id' ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function condition(){
        return $this->belongsTo(Condition::class);
    }
    public static function toBeRevisionedCount(){
        return Product::where('is_accepted', null)->count();
       }
}
