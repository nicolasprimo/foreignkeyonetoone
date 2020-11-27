<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsIngredient extends Model
{
    use HasFactory;
    public function ingredient()
    {
        return $this->hasOne('App\Models\Ingredient');
    }
}
