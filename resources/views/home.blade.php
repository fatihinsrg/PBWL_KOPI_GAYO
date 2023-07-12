@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="alert alert-primary" role="alert">
            Selamat Datang <span class="fw-bold">{{ Auth::user()->name }}</span>
        </div>
        <div>
            <h3 class="text-center mb-3 text-success">Sistem Stok Kopi Gayo</h3>
        </div>
        <h4>Produk yang Tersedia</h4>
        <div class="row">
            @foreach ($rows as $row)
                <div class="col col-2" style="margin: 10px 90px 20px 0">
                    <div class="card" style="width: 18rem;">
                        @php
                            $randomImage = 'kopi' . rand(1, 5) . '.jpg';
                        @endphp
                        <img class="img-thumbnail" src="../resources/img/{{ $randomImage }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center text-capitalize fw-bold">{{ $row->nama_stok }}</h5>
                            <p class="card-text text-center">{{ $row->deskripsi_stok }}</p>
                            <p class="card-text text-center text-danger">{{ $row->harga_stok }}</p>
                            <p class="card-text text-center text-secondary fw-light">{{ $row->jumlah_stok }} Stok : Tersedia
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <h4 class="mt-5">Informasi Pemesanan</h4>
        <div class="card w-100 ">
            <div class="card-body mx-auto">
                <h5 class="card-title text-center">Hubungi Kami
                    <span class="text-danger">&hearts;</span>
                </h5>
                <p class="card-text text-center">Hubungi Kami melalui Media Sosial dibawah ini atau Hubungi kami Langsung
                    melalui WhatsApp</p>
                <div class="row">
                    <div class="col-4">
                        <div class="d-flex justify-content-center my-3"><img src="../resources/img/tokopedia.png"
                                style="width: 50px;" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-center my-3"><img src="../resources/img/shoppe.png"
                                style="width: 90px;" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-center my-3"><img src="../resources/img/tiktok.png"
                                style="width: 90px;" alt="" srcset="">
                        </div>
                    </div>
                    <a href="#" class="btn btn-success w-100">Pesan Melalui Chat</a>
                </div>
            </div>
        </div>
    @endsection
