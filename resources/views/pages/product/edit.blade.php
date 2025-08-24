@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Update data Produk
        </div>
        <div class="card-body">
            <form action='/product/{{$produk->id_produk}}' method="POST">
                @method('PUT')  {{-- Ibarat override dari post ke put --}}
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" >Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control" value="{{$produk->nama_produk}}" >
                        @error('nama_produk')
                        <div id="emailHelp" class="form-text text-danger">
                        {{$message}}
                        </div>
                        @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Harga</label>
                        <input type="number" name="harga_produk" class="form-control" value={{$produk->harga}} >
                        @error('harga_produk')
                        <div id="emailHelp" class="form-text text-danger">
                        {{$message}}
                        </div>
                        @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-floating">
                        <textarea class="form-control"  name="deskripsi" id="floatingTextarea" >{{$produk->deskripsi_produk}}</textarea>
                        <label for="floatingTextarea">Deskripsi Porduk</label>
                        @error('deskripsi')
                        <div id="emailHelp" class="form-text text-danger">
                        {{$message}}
                        </div>
                        @enderror
                        </div>
                    </div>

                    <div class="col-sm-12 mt-3">
                        <button type="submit" class="btn btn-primary mb-3">Update Data</button>
                    </div>
                </div>
            </form>

        </div>
        </div>
    </div>

@endsection
