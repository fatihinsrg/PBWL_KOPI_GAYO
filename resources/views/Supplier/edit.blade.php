@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Supplier</h3>
        <form action="{{ url('/supplier/' . $row->supplier_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Nama Supplier</label>
                <input type="text" class="form-control" name="nama_supplier" value="{{ $row->nama_supplier }}"></>
            </div>
            <div class="mb-3">
                <label>Alamat Supplier</label>
                <input type="text" class="form-control" name="alamat_supplier" value="{{ $row->alamat_supplier }}"></>
            </div>
            <div class="mb-3">
                <label>Nomor Hp Supplier</label>
                <input type="text" class="form-control" name="nomor_hp_supplier" value="{{ $row->nomor_hp_supplier }}">
                </>
            </div>
            <div class="mb-3">
                <label>Email Supplier</label>
                <input type="text" class="form-control" name="email_supplier" value="{{ $row->email_supplier }}"></>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary btn-sm float-end" type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
