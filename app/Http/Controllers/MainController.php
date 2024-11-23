<?php

namespace App\Http\Controllers;
use App\Models\Documentation;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard(){
        return view('page.dashboard');
    }
    public function documentation(){
        $documentations = Documentation::all();
        return view('page.documentation', compact('documentations'));
    }

}

