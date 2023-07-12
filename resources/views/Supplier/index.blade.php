@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>
            Daftar Supplier Kopi
            <a class="btn btn-primary btn-sm float-end" href="{{ url('supplier/create') }}">Tambah Supplier</a>
        </h3>

        <table class="table table-bordered">
            <tr>
                <td>Id Supplier</td>
                <td>Nama Supplier</td>
                <td>Alamat Supplier</td>
                <td>Nomor Hp Supplier</td>
                <td>Email Supplier</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
                <tr>
                    <td>{{ $row->supplier_id }}</td>
                    <td>{{ $row->nama_supplier }}</td>
                    <td>{{ $row->alamat_supplier }}</td>
                    <td>{{ $row->nomor_hp_supplier }}</td>
                    <td>{{ $row->email_supplier }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm float-none"
                            href="{{ url('supplier/' . $row->supplier_id . '/edit') }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ url('supplier/' . $row->supplier_id) }}" method="POST">
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
