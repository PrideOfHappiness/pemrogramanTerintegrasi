<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequest;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;

class AuthSekretarisController extends Controller
{
    public function showFormLogin()
    {
        return view('sekretaris/loginSekretaris');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'user_id'=> 'required',
            'password' => 'required',
            'status' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/sekretaris/Home');
        }
        else
        {
        return back()->with('error', 'NIK atau Password salah');
        return redirect('/sekretaris');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/sekretaris');
    }

}
