@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Stok Kopi</h3>
        <form action="{{ url('/stok/' . $row->stok_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Nama Kopi</label>
                <input type="text" class="form-control" name="nama_stok" value="{{ $row->nama_stok }}"></>
            </div>
            <div class="mb-3">
                <label>Harga Kopi</label>
                <input type="text" class="form-control" name="harga_stok" value="{{ $row->harga_stok }}"></>
            </div>
            <div class="mb-3">
                <label>Jumlah Produk Kopi</label>
                <input type="text" class="form-control" name="jumlah_stok" value="{{ $row->jumlah_stok }}"></>
            </div>
            <div class="mb-3">
                <label>Deskripsi Kopi</label>
                <input type="text" class="form-control" name="deskripsi_stok" value="{{ $row->deskripsi_stok }}"></>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary btn-sm float-end" type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
