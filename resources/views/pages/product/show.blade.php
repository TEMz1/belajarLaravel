@extends('layouts.master')

@section('content')
    <h1>Ini Product</h1>
    <hr>
    <a href="/product/create" type="button" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="alert alert-primary">
        <b>Nama Toko : </b> {{$data_toko['nama_toko']}}     {{-- VAR data_toko diambil dari controller param keduanya harus array --}}
        <br>
        <b>Alamat : </b> {{$data_toko['alamat']}}
        <br>
        <b>Tipe Toko : </b> {{$data_toko['tipe']}}
    </div>
    <div class="alert">
        @if (session('pesan'))
        <div class="alert alert-primary">
            {{session('pesan')}}
        </div>

        @endif
    </div>
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex justify-content-between align-items-center">
                Daftar Produk
                <form class="input-group" style="width: 350px">
                    <input type="text" class="form-control" placeholder="Searching">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                </form>
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
            {{$loop->iteration}}    {{-- AUTO LOOPING NUM --}}
        </th>
        <td>
            {{$item->nama_produk}}  {{-- OBJECT YANG DITUJU MERUPAKAN NAMA HEADER ROW --}}
        </td>
        <td>
            {{$item->harga}}
        </td>
        <td>
            {{$item->deskripsi_produk}}
        </td>
        <td>

            <a href="/product/{{$item->id_produk}}/edit" class="btn btn-warning">Edit</a>
            <a href="/product/{{$item->id_produk}}" class="btn btn-info">Detail</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus{{$item->id_produk}}">
            Hapus
            </button>
        </td>
    </tr>
    @endforeach

  </tbody>
</table>
        </div>
        </div>

        @foreach ($data_produk as $item )
        <!-- Modal -->
        <div action class="modal fade" id="hapus{{$item->id_produk}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="/product/{{$item->id_produk}}" method="POST" class="modal-content">
                @csrf
                @method('DELETE')
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Yakin Hapus data?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{$item->nama_produk}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger">Hapus data</button>
            </div>
            </form>
        </div>
        </div>

        @endforeach

@endsection
