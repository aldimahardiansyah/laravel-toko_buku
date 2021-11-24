<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    # menyebutkan field selain yg bersifat fillable
    protected $guarded = ['id'];

    # membuat relasi one-to-many ke tabel book
    public function book()
    {
        return $this->hasMany(Book::class);
    }
}
