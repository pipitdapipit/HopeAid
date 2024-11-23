<?php

namespace App\Http\Controllers;
use App\Models\Documentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function dashboard(){
        $user = Auth::user();
        return view('page.dashboard', compact('user'));
    }

    public function articlePage(){
        return view('page.article');
    }

    public function documentationPage(){
        $documentations = Documentation::all();

        return view('page.documentation', compact('documentations'));
    }
}

