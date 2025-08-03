<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product; // import models product
use Illuminate\Support\Facades\DB;  // import juga untuk DB::

class ProductController extends Controller
{
    public function index(){
        $toko = [
            'nama_toko' => 'Toko Tama',
            'alamat' => 'Tangerang',
            'tipe' => 'Ruko'
        ];
        $produk = product::get(); // query untuk mengambil semua data yang ada di tb_product yang ada di models (eloquent)
        // $queryBuilder = DB::table('tb_products')->get();    // query untuk mengambil semua data yang ada di tb_product
        // dd($data);   // TEST DENGAN DUMPDOWN -> OUTPUT KEDUANYA SAMA
        // dd($queryBuilder);
        return view('pages.product.show',[
            'data_toko'=> $toko,
            'data_produk'=> $produk,
        ]);
    }

    public function addProduct(){
        return view('pages.addProduct');
    }
}
