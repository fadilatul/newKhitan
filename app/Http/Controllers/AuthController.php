<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Email Wajib Di isi',
            'password.required' => 'Password Wajib Di isi'
        ]);
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($infologin)) {
            // login berhasil
            if (Auth::user()->role_id == '1') {
                return redirect('admin')->with('success', 'Berhasil Login');
            } else {
                return redirect('dokter')->with('success', 'Berhasil Login');
            }
        } else {
            // login gagal
            return redirect('/')->withErrors('Email dan Password yang di masukkan tidak Valid');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil Logout');
    }
}
