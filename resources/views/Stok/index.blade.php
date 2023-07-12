@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>
            Stok Kopi di Gudang
            <a class="btn btn-primary btn-sm float-end" href="{{ url('stok/create') }}">Tambah Stok</a>
        </h3>

        <table class="table table-bordered">
            <tr>
                <td>Id Stok</td>
                <td>Nama Kopi</td>
                <td>Harga Kopi</td>
                <td>Stok yang Tersedia</td>
                <td>Nama Supplier</td>
                <td>Alamat Supplier Kopi</td>
                <td>No Hp Supplier</td>
                <td>Email Supplier</td>
                <td>Deskripsi Supplier Kopi</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
                <tr>
                    <td>{{ $row->stok_id }}</td>
                    <td>{{ $row->nama_stok }}</td>
                    <td>{{ $row->harga_stok }}</td>
                    <td>{{ $row->jumlah_stok }} Pcs</td>
                    <td>{{ $row->supplier->nama_supplier }}</td>
                    <td>{{ $row->supplier->alamat_supplier }}</td>
                    <td>{{ $row->supplier->nomor_hp_supplier }}</td>
                    <td>{{ $row->supplier->email_supplier }}</td>
                    <td>{{ $row->deskripsi_stok }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm float-none"
                            href="{{ url('stok/' . $row->stok_id . '/edit') }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ url('stok/' . $row->stok_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-primary btn-sm float-none">Hapus</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
