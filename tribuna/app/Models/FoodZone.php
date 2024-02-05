<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodZone extends Model
{
    use HasFactory;
    protected $table = 'food_zone';
    protected $fillable = ['name', 'photo', 'description', 'menu_url'];
    public $timestamps=false;
}
