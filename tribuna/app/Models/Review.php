<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $fillable = ['name', 'category_id', 'content', 'created_at'];
    public $timestamps=false;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
