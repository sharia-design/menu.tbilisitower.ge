<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $guarded = [];
    
    use HasFactory;

    public function categories()
    {
        return $this->belongsToMany(DrinkCategory::class);
    }
}
