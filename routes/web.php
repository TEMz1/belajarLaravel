<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/product',[ProductController::class,'index'] ); // read data menampilkan data
Route::get('/product/create',[ProductController::class,'create'] ); // menampilkan halaman form/inputan di create
Route::post('/product',[ProductController::class,'store'] );    //  mengolah data yang telah dikirim melalui form di create
Route::get('/product/{id}',[ProductController::class,'show'] ); //  menampilkan detail product berdasarkan id
Route::get('/product/{id}/edit',[ProductController::class,'edit']); //  menampilkan data ke page edit
Route::put('/product/{id}',[ProductController::class,'update'] );   // method put untuk method update
Route::delete('/product/{id}',[ProductController::class,'remove'] );   // method delete untuk method delete

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
