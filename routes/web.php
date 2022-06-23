<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = [
        'headerMenu' => [
            'character',
            'comics',
            'movies',
            'tv',
            'collectibles',
            'games',
            'videos',
            'fans',
            'news',
            'shop'
        ],
        'cards' => config('comics'),
        'icons' => [
            [
                'image' => "img/buy-comics-digital-comics.png",
                'description' => 'digitals comics'
            ],
            [
                'image' => "img/buy-comics-merchandise.png",
                'description' => 'dc merchandise'
            ],
            [
                'image' => "img/buy-comics-subscriptions.png",
                'description' => 'subscription'
            ],
            [
                'image' => "img/buy-comics-shop-locator.png",
                'description' => 'comic shop locator'
            ],
            [
                'image' => "img/buy-dc-power-visa.svg",
                'description' => 'dc power visa'
            ]
        ]
    ];

    return view('home', $data);
})->name('home');


