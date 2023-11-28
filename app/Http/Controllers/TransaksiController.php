<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    //
    public function index(){
        $transaksi = transaksi::latest()->paginate(5);
        $nomor = 1;
        return view('transaksi/index', compact('transaksi','nomor'));
    }

    public function create(){
        $transaksi = transaksi::get();
        return view('transaksi/tambah', compact('transaksi'));
    }

    public function store(Request $request){
        $request->validate([
            'jumlah_produk' => 'required',
            'tgl_transaksi' => 'required',
            'id_produk' => 'required',
            'id_user' => 'required',
        ]);

        transaksi::create([
            'jumlah_produk' => $request->jumlah_produk,
            'tgl_transaksi' => $request->tgl_transaksi,
            'id_produk' => $request->id_produk,
            'id_user' => $request->id_user
        ]);

        return redirect()->intended('transaksi');
    }

    public function edit($id){
        $transaksi = transaksi::where('jumlah_produk', $id)->first();

        return view('transaksi/edit', compact('transaksi'));

    }


    public function update(Request $request, $id){
        $request->validate([
            'jumlah_produk' => 'required',
            'tgl_transaksi' => 'required',
            'id_produk' => 'required',
            'id_user' => 'required',
        ]);

        $transaksi = [
            'jumlah_produk' =>$request->jumlah_produk,
            'tgl_transaksi' =>$request->tgl_transaksi,
            'id_produk' =>$request->id_produk,
            'id_user' =>$request->id_user,
        ];
        transaksi::where('jumlah_produk', $id)->update($transaksi);

        return redirect()->intended('transaksi');
    }
    public function destroy($id){
        transaksi::where('jumlah_produk', $id)->delete();

        return redirect()->intended('transaksi');
    }
}
