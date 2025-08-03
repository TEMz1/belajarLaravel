<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // sintaks dibawah untuk membuat table product
        Schema::create('tb_products', function (Blueprint $table) {
            $table->id('id_produk'); // defaultnya 'id'
            $table->string('nama_produk', 150); // default laravel 255
            $table->integer('harga');
            $table->text('deskripsi_produk');
            $table->integer('id_kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
