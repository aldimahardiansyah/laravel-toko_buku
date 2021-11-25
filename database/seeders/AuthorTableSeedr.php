<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorTableSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::create([
            'name' => 'Didik Setiawan',
            'email' => 'didieks@gmail.com'
        ]);

        Author::create([
            'name' => 'Sony Adams',
            'email' => 'sondyadam21@gmail.com'
        ]);
    }
}
