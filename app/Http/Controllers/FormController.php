<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function formPage(){
        $user = Auth::user();
        return view('form', compact('user'));
    }

    public function formInsert(Request $req){
        // $valid = $req->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'photo' => 'image|mimes:png,jpg,jpeg,gif|max:2048'
        // ]);

        $filePath = public_path('images');
        $forms = new Form;
        $forms->name = Auth::user()->name;
        $forms->email = Auth::user()->email;
        $forms->nominal = $req->input('nominal-radio') == true ? $req->input('nominal-radio') : $req->input('nominal');

        $file = $req->hasFile('photo');
        if($file){
            $photo = $req->file('photo');
            $fileName = time().$photo->getClientOriginalName();

            $photo->move($filePath, $fileName);

            // $valid['photo'] = $fileName;
            $forms->photo = $fileName;
        }


        // $reqData = $req->all();
        // $fileName = time().$req->file('bukti_pembayaran')->getClientOriginalName();
        // $path = $req->file('bukti_pembayaran')->storeAs('images', $fileName, 'public');
        // $reqData["bukti_pembayaran"] = '/storage/'.$path;

        // $forms->bukti_pembayaran = $reqData["bukti_pembayaran"];

        // dd($req->all());

        $forms->tipe_barang = $req->input('choice');
        $forms->save();
        // dd($req->all());

        return redirect()->route('form');
    }
}
