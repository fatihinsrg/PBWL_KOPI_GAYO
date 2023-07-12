@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Stok Kopi</h3>
        <form action="{{ url('/stok') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama Kopi</label>
                <input type="text" class="form-control" name="nama_stok">
            </div>
            <div class="mb-3">
                <label>Harga Kopi</label>
                <input type="text" class="form-control" name="harga_stok">
            </div>
            <div class="mb-3">
                <label>Jumlah Produk Kopi</label>
                <input type="text" class="form-control" name="jumlah_stok">
            </div>
            <div class="mb-3">
                <label>Deskripsi Kopi</label>
                <input type="text" class="form-control" name="deskripsi_stok">
            </div>
            <div class="input-group my-3">
                <label class="input-group-text" for="inputGroupSelect01">Supplier Kopi</label>
                <select class="form-select" id="inputGroupSelect01" name="stok_id_supplier" id="stok_id_supplier">
                    <option selected>Pilih Supplier...</option>
                    @foreach ($rowsSupplier as $Item)
                        <option value="{{ $Item->supplier_id }}">{{ $Item->nama_supplier }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary btn-sm float-end" type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection
