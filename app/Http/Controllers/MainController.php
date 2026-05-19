<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
      public $array = [
        [
            'id' => 1,
            'title' => 'Продукт 1',
            'price' => 500,
            'path' => '/img/pict1.jpg'
        ],
        [
            'id' => 2,
            'title' => 'Продукт 2',
            'price' => 1500,
            'path' => '/img/pict2.jpg'
        ],
        [
            'id' => 3,
            'title' => 'Продукт 3',
            'price' => 2500,
            'path' => '/img/pict3.jpg'
        ],
        [
            'id' => 4,
            'title' => 'Продукт 4',
            'price' => 700,
            'path' => '/img/pict4.jpg'
        ],
        [
            'id' => 5,
            'title' => 'Продукт 5',
            'price' => 3000,
            'path' => '/img/pict5.jpg'
        ],
        [
            'id' => 6,
            'title' => 'Продукт 6',
            'price' => 1200,
            'path' => '/img/pict6.jpg'
        ],
        [
            'id' => 7,
            'title' => 'Продукт 7',
            'price' => 800,
            'path' => '/img/pict7.jpg'
        ],
        [
            'id' => 8,
            'title' => 'Продукт 8',
            'price' => 5000,
            'path' => '/img/pict8.jpg'
        ]
    ];

    public function showIndex()
    {
        return view('home');
    }

    public function showArray()
    {
        $array = $this->array;

        return view('array', compact('array'));
    }

    public function sortArray()
    {
        $array = $this->array;

        usort($array, function ($a, $b) {
            return $a['price'] <=> $b['price'];
        });

        return view('array', compact('array'));
    }

    public function shuffleArray()
    {
        $array = $this->array;

        shuffle($array);

        return view('array', compact('array'));
    }

    public function filterArray()
    {
        $array = array_filter($this->array, function ($item) {
            return $item['price'] > 1000;
        });

        return view('array', compact('array'));
    }

}
