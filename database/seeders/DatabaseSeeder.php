<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Category::create([
            'category' => 'Fiksi'
        ]);
        Category::create([
            'category' => 'Bisnis'
        ]);
        Category::create([
            'category' => 'Sains & Teknologi'
        ]);
        Category::create([
            'category' => 'Kesehatan'
        ]);
        Category::create([
            'category' => 'Buku anak'
        ]);
        Category::create([
            'category' => 'Hiburan'
        ]);
        Category::create([
            'category' => 'Religi'
        ]);
        Category::create([
            'category' => 'Seni'
        ]);
        Category::create([
            'category' => 'Memasak, makanan & minuman'
        ]);

        Book::create([
            'title' => 'Buku Sakti Pemrograman Web',
            'author_id' => 1,
            'cover' => 'bspw',
            'price' => 54500,
            'stok' => 32,
            'category_id' => 3
        ]);
        Author::create([
            'name' => 'Didik Setiawan',
            'email' => 'didieks@gmail.com'
        ]);
    }
}
