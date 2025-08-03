<?php

namespace Database\Seeders;

//use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// import ini untuk menjalankan DB::table
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // query untuk menambah data
    DB::table('tb_products')->insert([[
        'nama_produk' => 'Victus V15 FB277AX',
        'harga' => 10900000,
        'deskripsi_produk' => 'ini adalah deskripsi data dummy',
        'id_kategori' => 1,
        'created_at' => now()
        ],[
        'nama_produk' => 'ACER NITRO V15 ANV15',
        'harga' => 11500000,
        'deskripsi_produk' => 'ini adalah deskripsi data dummy',
        'id_kategori' => 2,
        'created_at' => now()
        ],[
        'nama_produk' => 'LOQ IRX9 RYZEN',
        'harga' => 11000000,
        'deskripsi_produk' => 'ini adalah deskripsi data dummy',
        'id_kategori' => 3,
        'created_at' => now()
        ]

    ]);
    }
}
