<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;

    protected $table = 'map';

    protected $fillable = [
        'title',
        'description',
        'photo_url',
        'info_url',
        'path'
    ];
    public $timestamps= false;

}
