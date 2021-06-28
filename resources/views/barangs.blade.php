@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>Kelola Barang</h3>
                </div>
                <div class="card-body">
                    <a href="/barangs/tambah" class="btn btn-primary">Tambah Barang Baru</a>
                    <a href="/laporan" class="btn btn-primary">Laporan Bulanan</a>
                    <br/>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID Barang</th>
                                <th>Nama Barang</th>
                                <th>Gambar Barang</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Keterangan</th>
                                <th>Tag</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barangs as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->nama_barang }}</td>
                                <td>{{ $p->gambar }}</td>
                                <td>{{ $p->harga }}</td>
                                <td>{{ $p->stok }}</td>
                                <td>{{ $p->keterangan }}</td>
                                <td>{{ $p->tag }}</td>
                                <td>
                                    <a href="/barangs/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/barangs/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $barangs->links() }}
                </div>
            </div>
        </div>
@endsection