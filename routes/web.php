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

    $paste_db = config('paste');

    $paste_lunghe = [];
    $paste_corte = [];
    $paste_cortissime = [];

    foreach ($paste_db as $index => $pasta) {

        $pasta['id'] = $index;

        if ($pasta['tipo'] == 'lunga') {

            $paste_lunghe[] = $pasta;
        } elseif ($pasta['tipo'] == 'corta') {

            $paste_corte[] = $pasta;
        } elseif ($pasta['tipo'] == 'cortissima') {
            $paste_cortissime[] = $pasta;
        }
    }

    return view('homepage', [
        'lunghe' => $paste_lunghe,
        'corte' => $paste_corte,
        'cortissime' => $paste_cortissime,
    ]);
})->name('homepage');


Route::get('/news', function () {
    return view('news');
})->name('news');


Route::get('/product/{id}', function ($id) {

    $paste_db = config('paste');

    $paste = $paste_db[$id];

    return view('product', [
        'paste' => $paste
    ]);
})->name('product')->where('id', '[0-9]+');
