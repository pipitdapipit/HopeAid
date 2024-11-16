<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginAndRegisterController extends Controller
{
    public function loginPage(){
        return view('Login_Register.login');
    }

    public function loginInsert(Request $req){
        $input = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        if(Auth::attempt($input)){
            return redirect()->route('form');
        } else {
            return redirect()->back()->with('error', 'Input Invalid!');
        }
    }

    public function registerPage(){
        return view('Login_Register.register');
    }

    public function registerInsert(Request $req){
        $users = new User;
        $users->name = $req->input('username');
        $users->email = $req->input('email');
        $users->password = Hash::make($req->input('password'));
        $users->save();

        return redirect()->route('login');
    }
}
