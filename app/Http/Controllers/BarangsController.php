<?php

namespace App\Http\Controllers;
use App\Barangs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class BarangsController extends Controller
{
    
	public function index(){
		$barangs = DB::table('barangs')->paginate(5);
        return view('barangs',['barangs' => $barangs]);
	}
	
	public function tambah()
    {
    	return view('barangs_tambah');
    } 

    public function store(Request $request){
		$this->validate($request, [
		    
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
		
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'uploads';
		$file->move($tujuan_upload,$nama_file);

		DB::table('barangs')->insert([
		    'stok' => $request->stok,
		    'nama_barang' => $request->nama,
			 'harga' => $request->harga,
			
			'gambar' => $nama_file,
			'keterangan' => $request->keterangan,
            'tag'=> $request->tag,
		]);

		return redirect('/barangs');
	}

    public function hapus($id)
    {
        $barangs = DB::table('barangs')->where('id',$id)->get();
		$gambar = DB::table('barangs')->where('id',$id)->first();
		File::delete('uploads/'.$gambar->gambar);
		DB::table('barangs')->where('id',$id)->delete();
        return redirect('/barangs');

    }

	public function edit($id)
    {
		$barangs = DB::table('barangs')->where('id',$id)->get();
		return view('edit',['barangs' => $barangs]);
    }

	public function update(Request $request){
		DB::table('barangs')->where('id',$request->id)->update([
			'nama_barang' => $request->nama,
			'harga' => $request->harga,
			'stok' => $request->stok,
			'tag' => $request->tag,
			'keterangan' => $request->keterangan
			]);
			return redirect('/barangs');			
	}
	public function laporan()
	{
		$pesanans = DB::table('pesanans')->paginate(5);
        return view('laporan',['pesanans' => $pesanans]);
	}
}
