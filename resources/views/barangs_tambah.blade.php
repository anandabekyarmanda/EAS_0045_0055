@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="container">

			<h2 class="text-center my-5">Tambah Barang</h2>
			
			<div class="col-lg-8 mx-auto my-5">	

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<form action="/barangs/store" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
	                <div class="form-group">
						<b>Nama Barang</b>
						<textarea class="form-control" name="nama"></textarea>
					</div>
                    <div class="form-group">
						<b>Stok Barang</b>
						<textarea class="form-control" name="stok"></textarea>
					</div>
                    <div class="form-group">
						<b>Tag</b>
						<textarea class="form-control" name="tag"></textarea>
					</div>
                      <div class="form-group">
						<b>Harga Barang</b>
						<textarea class="form-control" name="harga"></textarea>
					</div>
                    
   
					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
					</div>

					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>

					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
@endsection