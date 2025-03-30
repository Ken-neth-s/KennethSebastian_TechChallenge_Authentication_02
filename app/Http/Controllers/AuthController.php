<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister() {
        return view('register');
        // memberikan user display halaman register
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string',
            // validasi agar name yang diinput keisi dan berupa string
            'email' => 'required|string|email|unique:users',
            // validasi agar email yang diinput keisi beneran dan berupa email dan unik untuk tiap user
            'password' => 'required|min:6|confirmed',
            // validasi agar password beneran keisi dengan minimal karakter 6 dan cocok dengan confirm password
        ], [
            'email.unique' => 'Email already used'
            // kalimat yang bakal didisplay jika email tidak unik
        ]);

        User::create([
            'name' => $request->name,
            // untuk masukin nama yang sudah diinput user ke dalam database
            'email' => $request->email,
            // untuk masukin email yang sudah diinput user ke dalam database
            'password' => Hash::make($request->password),
            // untuk masukin password yang sudah diinput user ke dalam input tetapi tidak berupa plain text agar hacker tidak bisa lihat password aslinya
        ]);

        return redirect('/login')->with('success', 'User registed successfully');
        // jika sukses register maka user akan diredirect ke halaman login
    }

    public function showLogin() {
        return view('login');
        // display halaman login untuk user
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            // validasi email yang diinput keisi dan berupa email
            'password' => 'required'
            // validasi password sudah keisi
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            // untuk cari user apakah udah cocok dengan yang di database atau belom
            return redirect('/home')->with('success', 'Login Successful');
            // jika login sukses maka user akan diredirect ke halaman home
        }

        return back()->withErrors(['error' => 'Email atau password salah']);
        // jika pada baris 55 gagal maka user balik ke halaman login dengan kalimat bahwa email atau passswordnya salah di display
    }

    public function logout() {
        Auth::logout();
        // logout user
        return redirect('/login')->with('success', 'Logged out');
        // jika berhasil logout maka user akan diredirect ke halaman login
    }
}
