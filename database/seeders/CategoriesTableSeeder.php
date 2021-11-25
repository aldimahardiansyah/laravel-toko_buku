<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

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
    }
}
