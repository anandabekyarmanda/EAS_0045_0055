@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <a href="/cari2"><img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="950" alt="">  
        </div>
        @foreach($barangs as $barang)
        <div class="col-md-2">
            <div class="card">
              <a href="{{ url('pesan') }}/{{ $barang->id }}"><img src="{{ url('uploads') }}/{{ $barang->gambar }}" class="card-img-top" width="225" height="175" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><strong>{{ $barang->nama_barang }}</strong></h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                    <strong>Stok :</strong> {{ $barang->stok }}<br>
                    <hr>
                </p>
                <span class="badge badge-pill badge-warning">{{ $barang->tag }} </span>
                    @if($barang->stok==0)
                    <span class="badge badge-pill badge-danger">Barang Kosong </span>
                    @else
                    @endif
              </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>
@endsection
