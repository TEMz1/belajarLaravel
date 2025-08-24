@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Tambah data Produk
        </div>
        <div class="card-body">
            <form action='/product' method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" >Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control" value={{old('nama_produk')}} >
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
                        <input type="number" name="harga_produk" class="form-control" value={{old('harga_produk')}} >
                        @error('harga_produk')
                        <div id="emailHelp" class="form-text text-danger">
                        {{$message}}
                        </div>
                        @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-floating">
                        <textarea class="form-control" placeholder="Deskripsi produk" name="deskripsi" id="floatingTextarea" value={{old('deskripsi')}}></textarea>
                        <label for="floatingTextarea">Deskripsi Porduk</label>
                        @error('deskripsi')
                        <div id="emailHelp" class="form-text text-danger">
                        {{$message}}
                        </div>
                        @enderror
                        </div>
                    </div>

                    <div class="col-sm-12 mt-3">
                        <button type="submit" class="btn btn-primary mb-3">Tambah Data</button>
                    </div>
                </div>
            </form>

        </div>
        </div>
    </div>

@endsection
