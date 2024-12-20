<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function formPage($id){
        $forms = Donasi::findOrFail($id);
        $user = Auth::user();
        return view('userpage.form', compact('user', 'forms'));
    }

    public function formInsert(Request $req, $id){
        // $valid = $req->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'photo' => 'image|mimes:png,jpg,jpeg,gif|max:2048'
        // ]);

        $filePath = public_path('bukti/');
        $forms = new Form;
        $forms->user_id = Auth::user()->id;
        $forms->donasi_id = Donasi::findOrFail($id);
        $forms->name = Auth::user()->name;
        $forms->email = Auth::user()->email;
        $forms->nominal = $req->input('nominal-radio') == true ? $req->input('nominal-radio') : $req->input('nominal');
        $forms->jenis_donasi = $req->

        $file = $req->hasFile('photo');
        if($file){
            $photo = $req->file('photo');
            $fileName = time().$photo->getClientOriginalName();
            $photo->move($filePath, $fileName);

            $forms->photo = $fileName;
        }

        $forms->tipe_barang = $req->input('choice');
        $forms->save();
        // dd($req->all());

        return redirect()->route('form');
    }
}
