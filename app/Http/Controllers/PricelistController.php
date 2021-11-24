<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricelistController extends Controller
{
    public function pricelist()
    {
        $books = [
            [
                'judul' => 'Buku Sakti Pemrograman Web',
                'penulis' => 'Didik Setiawan',
                'cover' => 'bspw',
                'harga' => 54500
            ],
            [
                'judul' => 'Rusak Saja Buku Ini',
                'penulis' => 'Sony Adams',
                'cover' => 'rsbi',
                'harga' => 50000
            ],
            [
                'judul' => 'Jangan Jadi Pecundang',
                'penulis' => 'Badrun Munier',
                'cover' => 'jjp',
                'harga' => 47500
            ],
            [
                'judul' => '10 Juta Pertama dari YouTube',
                'penulis' => 'Jefferly Helian',
                'cover' => '10jpdy',
                'harga' => 70000
            ],
            [
                'judul' => 'Buku Sakti Pemrograman Web',
                'penulis' => 'Didik Setiawan',
                'cover' => 'bspw',
                'harga' => 54500
            ],
            [
                'judul' => 'Rusak Saja Buku Ini',
                'penulis' => 'Sony Adams',
                'cover' => 'rsbi',
                'harga' => 50000
            ],
            [
                'judul' => 'Jangan Jadi Pecundang',
                'penulis' => 'Badrun Munier',
                'cover' => 'jjp',
                'harga' => 47500
            ],
            [
                'judul' => '10 Juta Pertama dari YouTube',
                'penulis' => 'Jefferly Helian',
                'cover' => '10jpdy',
                'harga' => 70000
            ]
        ];

        return view('pricelist', ['title' => 'PriceList', 'books' => $books]);
    }
}
