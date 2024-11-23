<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Register() {
        return view('Auth.Register');
    }

    public function Login() {
        return view('Auth.Login');
    }

    public function Regispost(Request $request) {
        $request -> validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $user = new User();

        $user->name = $request->nama;
        $user->email= $request->email;
        $user->password = $request->password;
        $user->role = $request->role;

        if($user->save()) {
            return redirect(route('Login')) -> with('success', 'Registrasi berhasil');
         }
    
         return redirect('/Register') -> with('error', 'Register anda gagal');
    }

    public function Loginpost(Request $request) {
        $request -> validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credential = $request->only('email', 'password');

       if(Auth::attempt($credential)) {
         return redirect()->intended(route('Dashboard'));
       }
    
         return redirect(route('Login')) -> with('error', 'Login gagal');
    }

    public function Logout() {
        Auth::logout();
        return redirect(route('Login'));
    }
}
