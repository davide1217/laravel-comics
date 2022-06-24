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

Route::get('character', function () {

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
        ]
    ];
    return view('character', $data);
})->name('character');


Route::get('collectibles', function () {

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
        ]
    ];
    return view('collectibles', $data);
})->name('collectibles');


Route::get('comics', function () {

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
        ]
    ];
    return view('comics', $data);
})->name('comics');


Route::get('fans', function () {

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
        ]
    ];
    return view('fans', $data);
})->name('fans');


Route::get('games', function () {

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
        ]
    ];
    return view('games', $data);
})->name('games');


Route::get('movies', function () {

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
        ]
    ];
    return view('movies', $data);
})->name('movies');


Route::get('news', function () {

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
        ]
    ];
    return view('news', $data);
})->name('news');


Route::get('shop', function () {

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
        ]
    ];
    return view('shop', $data);
})->name('shop');


Route::get('tv', function () {

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
        ]
    ];
    return view('tv', $data);
})->name('tv');


Route::get('videos', function () {

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
        ]
    ];
    return view('videos', $data);
})->name('videos');
