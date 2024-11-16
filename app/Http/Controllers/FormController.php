<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function formPage(){
        // $user_name = Auth::user()->name;
        // $user_email = Auth::user()->email;
        $user = Auth::user();
        return view('form', compact('user'));
    }

    public function formInsert(Request $req){
    }
}
