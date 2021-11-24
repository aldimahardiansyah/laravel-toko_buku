<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


    protected $guarded = ['id'];

    # membuat relasi one-to-one reverse ke table author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    # membuat relasi one-to-many reverse ke table category
    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
}
