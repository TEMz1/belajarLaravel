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

    public function create(){
        return view('pages.product.add');
    }

    public function store(request $request){
        $request->validate([
            'nama_produk'=>'required|min:8',
            'harga_produk'=>'required',
            'deskripsi'=>'required',
        ],[
            'nama_produk.required'=>'Field wajib diisi!',
            'nama_produk.min'=>'Field minimum berisi 8 karakter!',
            // 'nama_produk.max'=>'Field maksimum berisi 12 karakter!',
            'harga_produk.required'=>'Field wajib diisi!',
            'deskripsi.required'=>'Field wajib diisi!',
        ]
    );
        product::create([
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga_produk,
            'deskripsi_produk'=>$request->deskripsi,
            'id_kategori'=>'99'
        ]);

        return redirect('/product')->with('pesan','data berhasil ditambahkan');
    }

    public function update($id, Request $request){

        $request->validate([
            'nama_produk'=>'required|min:8',
            'harga_produk'=> 'required',
            'deskripsi'=> 'required',
        ],[
            'nama_produk.required'=> 'Field wajib diisi',
            'nama_produk.min'=> 'Field minimal berisi 8 karakter',
            'harga_produk.required'=> 'Field wajib diisi',
            'deskripsi.required'=> 'Field wajib diisi'
        ]
    );

    // query untuk update data
        product::where('id_produk',$id)->update([
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga_produk,
            'deskripsi_produk'=>$request->deskripsi,
        ]);
        return redirect('/product')->with('pesan','data berhasil diupdate!');
    }

    public function remove($id, Request $request){
        product::findOrFail($id)->delete();
        return redirect('/product')->with('pesan','data berhasil dihapus!');
    }

    public function show($id)
    {
        //  elequent or
        $data = product::findOrFail($id);
        return view('pages.product.detail',[
            'produk'=> $data
        ]);
    }

    public function edit($id)
    {
        $data = product::findOrFail($id);
        return view('pages.product.edit',[
            'produk'=> $data
        ]);
    }
}
