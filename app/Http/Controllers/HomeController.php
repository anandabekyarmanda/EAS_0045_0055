<?php

namespace App\Http\Controllers;
use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->hak !== 'admin'){
            $barangs = Barang::paginate(20);
            return view('home', compact('barangs'));
        }else{
            $barangs = DB::table('barangs')->paginate(5);
            return view('barangs',['barangs' => $barangs]);
        }
    }
    public function cari(Request $request)
    {
        $cari= $request->cari;
        $barangs = Barang::where('nama_barang','like',"%".$cari."%")->paginate();
        return view('home', compact('barangs'));
    }

    public function cari2()
    {
        $barangs = Barang::where('tag','like',"Barang Diskon")->paginate();
        return view('home', compact('barangs'));
    }
}
