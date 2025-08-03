@extends('layouts.master')

@section('content')
    <h1>Ini Product</h1>
    <hr>
    <a href="/product/tambah" type="button" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="alert alert-primary">
        <b>Nama Toko : </b> {{$data_toko['nama_toko']}}
        <br>
        <b>Alamat : </b> {{$data_toko['alamat']}}
        <br>
        <b>Tipe Toko : </b> {{$data_toko['tipe']}}
    </div>
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                Daftar Produk
            </div>
            <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Product</th>
      <th scope="col">Harga</th>
      <th scope="col">Deskripsi Produk</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_produk as $item)
    <tr>
        <th scope="row">
            {{$loop->iteration}}
        </th>
        <td>
            {{$item->nama_produk}}
        </td>
        <td>
            {{$item->harga}}
        </td>
        <td>
            {{$item->deskripsi_produk}}
        </td>
        <td>
            <button type="button" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-warning">Edit</button>
        </td>
    </tr>
    @endforeach

  </tbody>
</table>
        </div>
        </div>

@endsection
