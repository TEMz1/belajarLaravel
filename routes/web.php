<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/product',[ProductController::class,'index'] );
Route::get('/product/tambah',[ProductController::class,'addProduct'] );

Route::get('/about', function () {
    return view('pages.about',[
        'nama' => 'miftachul tama',
        'umur' => '19',
        'alamat' => 'Tangerang',
    ]);
});

Route::get('/about/{id}', function($id){
    return view('pages.detail',[
        'data' => $id
    ]);
});

Route::view('/contact','pages.contact');
