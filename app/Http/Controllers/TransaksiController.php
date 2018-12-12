<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Transaksi;
use App\Admin;
use Auth;
use App\User;

class TransaksiController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function detail ($id) {
        $menu = Menu::find($id);
        return view('transaksi.detail', compact('menu')); }

    public function store(Request $request, $id){
        $this->validate(request(),[
            
            'jbarang'=>'required|numeric',
            'tanggal_ambil'=>'date'

        ]);

        $Transaksi = new Transaksi;
        $Transaksi->jbarang = $request->jbarang;
        $Transaksi->tanggal_ambil = $request->tanggal_ambil;
        $Transaksi->id_pemesan = Auth::user()->id;
        $Transaksi->status = '1';
        $Transaksi->id_barang = $id;
        $Transaksi->save();

        return redirect('/home')->with('success','Request Berhasil Ditambahkan');
    }
}
