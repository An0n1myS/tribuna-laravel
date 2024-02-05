<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TubingType extends Model
{
    use HasFactory;

    protected $table = 'tubing_type';
    protected $fillable = ['title', 'count'];
    public $timestamps=false;
}
