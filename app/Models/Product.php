<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    

      protected $fillable = [];


     public function path()
     {
        
        return "products/".$this->slug;
     }
   
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

      public function presentPrice()
    {
      return '£'.number_format($this->price / 100, 2);
    }
    
    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }

}
