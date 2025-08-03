@extends('layouts.master')

@section('content')
    <h1>Ini Product</h1>
    <hr>
    <a href="/product/tambah" type="button" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="alert alert-primary">
        <b>Nama Toko : </b> {{$nama_toko}}
        <br>
        <b>Alamat : </b> {{$alamat}}
        <br>
        <b>Tipe Toko : </b> {{$tipe}}
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
      <th scope="col">Stock</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Laptop Victus 15</td>
      <td>11</td>
      <td>11000000</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
      </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Laptop Victus 15</td>
      <td>11</td>
      <td>11000000</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
      </td>
    </tr>

  </tbody>
</table>
        </div>
        </div>

@endsection
