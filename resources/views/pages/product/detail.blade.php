@extends('layouts.master')

@section('content')
    <h1>Ini Product</h1>
    <hr>


    <div class="card">
        <div class="card-body">
            <div class="card-header">
                Detail Product {{$produk->nama_produk}}
            </div>
        <div class="card-body">
            <img src="https://placehold.co/600x400" class="img-fluid" alt="">
                <p>Nama Product : {{$produk->nama_produk}}</p>
                <p>Harga : {{$produk->harga}}</p>
                <p>Deskripsi : {{$produk->deskripsi_produk}}</p>
                <p>Kategori : {{$produk->id_kategori}}</p>
                <p>Stok :  50</p>
        </div>
        </div>
        </div>

@endsection
