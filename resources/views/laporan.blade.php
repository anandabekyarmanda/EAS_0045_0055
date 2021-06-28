@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>Laporan Bulanan</h3>
                </div>
                <div class="card-body">
                    <a href="/barangs/tambah" class="btn btn-primary">Tambah Barang Baru</a>
                    <a href="/laporan" class="btn btn-primary">Laporan Bulanan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Total Pendapatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pesanans as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->tanggal }}</td>
                                <td>{{ number_format($p->jumlah_harga) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    Jumlah Data : {{ $pesanans->total() }} <br/>
                    {{ $pesanans->links() }}
                </div>
            </div>
        </div>
@endsection