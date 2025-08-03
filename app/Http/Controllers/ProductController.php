<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct(){
        $data = [
            'nama_toko' => 'Toko Tama',
            'alamat' => 'Tangerang',
            'tipe' => 'Ruko'
        ];
        return view('pages.product',$data);
    }

    public function addProduct(){
        return view('pages.addProduct');
    }
}
