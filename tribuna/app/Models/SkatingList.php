<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkatingList extends Model
{
    use HasFactory;

    protected $table = 'skating_list';
    protected $fillable = ['size', 'count'];
    public $timestamps=false;
}
