<?php

namespace App\Http\Controllers;
use App\Models\Documentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function dashboard(){
        $user = Auth::user();
        return view('userpage.dashboard', compact('user'));
    }

    public function articlePage(){
        $user = Auth::user();
        return view('userpage.article', compact('user'));
    }

    public function documentationPage(){
        $user = Auth::user();
        $documentations = Documentation::all();

        return view('userpage.documentation', compact('documentations', 'user'));
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}

