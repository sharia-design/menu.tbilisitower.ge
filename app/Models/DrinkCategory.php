<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrinkCategory extends Model
{
    use HasFactory;
    
    protected $guarded = [];  
 
    public function drinks()
    {
        return $this->belongsToMany(Drink::class);
    }
}
