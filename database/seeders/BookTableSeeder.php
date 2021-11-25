<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'Buku Sakti Pemrograman Web',
            'author_id' => 1,
            'cover' => 'bspw',
            'price' => 54500,
            'stok' => 32,
            'category_id' => 3
        ]);

        Book::create([
            'title' => 'Rusak Saja Buku Ini',
            'author_id' => 2,
            'category_id' => 6,
            'cover' => 'rsbi',
            'stok' => 12,
            'price' => 50000
        ]);
    }
}
