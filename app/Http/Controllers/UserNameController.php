<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;

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
        ]);

        $Username['password'] = bcrypt($Username['password']);
        $Username['status'] = 1;
        User::updateOrInsert(['username' => $Username['username']], $Username);
        if ($Username) {
            Alert::success('username Berhasil Dibuat');
            return redirect()->intended('/ManajemenPengguna');
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
            $credentials = auth()->user();
            if ($credentials->status == '1') {
                $request->session()->regenerate();
                Alert::Toast('Selamat Datang', 'success');
                return redirect('/');
            } else {
                auth()->logout();
            }
        }
        Alert::Toast('Username Dan Password Telah Dimusnahkan', 'error');
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
        return view('Dashboard.Pegawai.ManajemenPengguna', [
            'users' => User::all(),
        ]);
    }
    public function CariUsername($id)
    {
       $Username = user::find($id);
       return response()->json($Username);
    }
}
