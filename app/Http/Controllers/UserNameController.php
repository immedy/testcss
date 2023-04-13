<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use RealRashid\SweetAlert\Facades\Alert;

class UserNameController extends Controller
{
    public function index(Request $request,)
    {
        $Username = $request->validate([
            'pegawai_id' => 'required|unique:users,pegawai_id',
            'username' => 'required',
            'password' => 'required'
        ]);
       $Username['status'] = 1;
       User::Insert($Username);
       if ($Username) {
        Alert::success('username Berhasil Dibuat');
        return back();
    }
    Alert::error('Terjadi Kesalahan');
    return back();
        
    }
}
