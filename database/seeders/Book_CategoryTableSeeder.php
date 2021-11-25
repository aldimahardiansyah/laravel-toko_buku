<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Book_CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book_category = [
            [
                'category_id' => 3,
                'book_id' => 1
            ],
            [
                'book_id' => 2,
                'category_id' => 6
            ]
        ];

        DB::table('book_category')->insert($book_category);
    }
}
