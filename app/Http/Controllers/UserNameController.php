<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;
use RealRashid\SweetAlert\Facades\Alert;

class UserNameController extends Controller
{
    public function HalamanLogin()
    {
        return view('Layout.login');
    }
    public function index(Request $request,)
    {
        $Username = $request->validate([
            'pegawai_id' => 'required|unique:users,pegawai_id',
            'username' => 'required',
            'password' => 'required',
            // 'akses' => 'nullable'
        ]);
        
        $Username['password'] = bcrypt($Username['password']);
        // $Username['akses'] = collect($Username['akses']);
        $Username['status'] = 1;
      
        User::updateOrInsert(['username' => $Username['username']], $Username);
        if ($Username) {
            Alert::success('username Berhasil Dibuat');
            return back();
            
        }
        Alert::error('Terjadi Kesalahan');
        return redirect()->back();
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],

        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Alert::toast('Selamat Datang ', 'success');
            return redirect('/');
        }
        Alert::Toast('Username Dan Password Tidak Sama', 'error');
        return back();
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function ManajemenPengguna()
    {
        return view('Dashboard.Pegawai.Manajemen Pengguna',[
            'users' => User::all()
        ]);
    }
}
