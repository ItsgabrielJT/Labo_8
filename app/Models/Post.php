<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'descripcion',
        'category_id'
    ];

    public function category() {
        $this->belongsTo(Category::class);
    }
}
