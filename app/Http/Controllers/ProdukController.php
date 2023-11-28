<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function produkcustomer(){
        $produk = produk::latest()->paginate(5);
        $nomor = 1;
        return view('customer/index', compact('produk','nomor'));
    }

    public function index(){
        $produk = produk::latest()->paginate(5);
        $nomor = 1;
        return view('produk/index', compact('produk','nomor'));
    }
    public function create(){
        $produk = produk::get();
        return view('produk/tambah', compact('produk'));
    }
    public function store(Request $request){

        $request->validate([
            'nama_produk' => 'required',
            'merk_produk' => 'required',
            'harga' => 'required'
        ]);

        produk::create([
            'nama_produk' => $request->nama_produk,
            'merk_produk' => $request->merk_produk,
            'harga' => $request->harga
        ]);

        return redirect()->intended('produk');

    }

    public function edit($id){
        $produk = produk::where('id_produk', $id)->first();

        return view('produk/edit', compact('produk'));

    }
    public function update(Request $request, $id){
        $request->validate([
            'nama_produk' => 'required',
            'merk_produk' => 'required',
            'harga' => 'required',
        ]);

        $produk = [
            'nama_produk' =>$request->nama_produk,
            'merk_produk' =>$request->merk_produk,
            'harga' =>$request->harga,
        ];
        produk::where('id_produk', $id)->update($produk);

    return redirect()->intended('produk');
    }
    public function destroy($id){
        produk::where('id_produk', $id)->delete();

        return redirect()->intended('produk');
    }
}
