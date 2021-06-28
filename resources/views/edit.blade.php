@extends('layouts.app')

@section('content')
<div class="row">
		<div class="container">
        <h2 class="text-center my-5">Edit Barang</h2>
			<div class="col-lg-8 mx-auto my-5">	
@foreach($barangs as $b)
<form action="/barangs/update" method="post">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{ $b->id }}"> <br/>
Nama <input type="text"  class="form-control" required="required" name="nama" value="{{ $b->nama_barang }}">
Harga <input type="text" class="form-control" required="required" name="harga" value="{{ $b->harga }}">
Stok <input type="text" class="form-control" required="required" name="stok" value="{{ $b->stok }}">
Tag <input type="text" class="form-control" required="required" name="tag" value="{{ $b->tag }}">
Keterangan <textarea class="form-control" required="required" name="keterangan">{{ $b->keterangan }}</textarea> <br/>
<input type="submit" value="Simpan Data">
</form>
@endforeach
@endsection