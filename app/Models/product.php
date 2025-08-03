<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    // inisialisasi tabel produk
    protected $table = 'tb_products';

    // inisialisasi PK dalam table
    protected $primaryKey = 'id_produk';

    // inisialisasi data yang dapat diisi
    // protected $fillLable = ['nama_produk', 'harga'. 'stok'];

    // inisialisasi data yang tidak bisa diisi / diubah
    protected $guarder =['id_produk'];
}
