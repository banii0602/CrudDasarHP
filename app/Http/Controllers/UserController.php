<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\transaksi;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function login() {
        return view('user.login');
    }
    public function login_proses(Request $request) {
        $request->validate([
            'nama_user' => 'required',
            'password' => 'required',
        ]);

        $datalogin = [
            'nama_user' =>$request->nama_user,
            'password' =>$request->password
        ];

        if(Auth::attempt($datalogin)){
            $request->session()->regenerate();
            if(Auth::user()->role == 'Admin'){
                return redirect()->intended('dashboardadmin');
            }else if(Auth::user()-> role == 'Customer'){
                return redirect()->intended('produkcustomer');
            }
        }else
        return redirect()->intended('login')->with('failed', 'password atau username salah coba lagi');
    }

    public function register() {
        return view('user.register');

    }
    public function register_proses(Request $request){
        $request->validate([
            'nama_user' => 'required',
            'password' => 'required',
            'role' => 'required|in:Admin,Customer',
        ]);

        user::create([
            'nama_user' =>$request->nama_user,
            'password' =>bcrypt($request->password),
            'role' =>$request->role
        ]);

        return redirect()->intended('login');
    }

    public function dashboardadmin() {
        $user = user::latest()->paginate(5);
        $produk = produk::latest()->paginate(5);
        $transaksi = transaksi::latest()->paginate(5);
        $nomor = 1;
        return view('admin/index', compact('user','produk','transaksi','nomor'));
    }

    public function index() {
        $user = user::latest()->paginate(5);
        $nomor = 1;
        return view('user/index', compact('user','nomor'));
    }

    public function create(){
        $user = user::get();
        return view('user/tambah', compact('user'));
    }


    public function store(Request $request){
        $request->validate([
            'nama_user' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        user::create([
            'nama_user' => $request->nama_user,
            'password' => $request->password,
            'role' => $request->role
        ]);

        return redirect()->intended('user');

    }

    public function edit($id){
        $user = user::where('id_user', $id)->first();
        return view('user/edit', compact('user'));

    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_user' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = [
            'nama_user' =>$request->nama_user,
            'password' =>$request->password,
            'role' =>$request->role,
        ];
        user::where('id_user', $id)->update($user);

        return redirect()->intended('user');
    }
    public function destroy($id){
        user::where('id_user', $id)->delete();

        return redirect()->intended('user');
    }
}

