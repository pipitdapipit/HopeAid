<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DonasiController extends Controller
{
    public function index(){
        $donasi = Donasi::all();
        $user = Auth::user();
        return view('adminpage.donasi', compact('user','donasi'));
    }
    
    public function create(){
        return view('adminpage.create_donasi');
    }

    public function store(Request $request)
{
    $request->validate([
        'jenis_donasi' => 'required|max:45',
    ],
    [
        'jenis_donasi.required' => 'Jenis Donasi wajib diisi',
    ]);
    
    DB::table('donasis')->insert([
        'jenis_donasi'=>$request->jenis_donasi,
    ]);
    
    return redirect()->route('index.index');
    }
    public function edit(Donasi $id)
    {
        //
        return view('adminpage.edit_donasi', compact('id'));
    }

    public function update(Request $request, string $id)
{
    // validasi data
    $request->validate([
        'jenis_donasi' => 'required|max:45',
    ],
    [
        'jenis_donasi.required' => 'Jenis Donasi wajib diisi',
    ]);
 
    DB::table('donasis')->where('id',$id)->update([
        'jenis_donasi'=>$request->jenis_donasi,
    ]);
    return redirect()->route('index.index');
}
public function destroy(Donasi $id)
{
    $id->delete();
    
    return redirect()->route(route: 'index.index')
            ->with('success','Data berhasil di hapus' );
}

    
}
