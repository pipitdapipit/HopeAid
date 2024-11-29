<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use App\Models\Donasi;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Node\Block\Document;

class AdminController extends Controller
{
    //Dashboard Page
    public function adminDashboard(){
        $donasi = Donasi::all();
        $user = Auth::user();
        return view('adminpage.admin_dashboard', compact('user', 'donasi'));
    }

    public function createDonation(){
        return view('adminpage.createDonation');
    }

    public function insertDonation(Request $req){

        $req->validate([
            'judul_donasi' => 'required|min:5',
            'deskripsi_donasi' => 'required|min:5',
            'target_donasi' => 'required|min:0|max:999999999',
            'photo_donasi' => 'image|mimes:png,jpg,jpeg,gif|max:2048'
        ]);
        $publicPath = public_path('donation/');
        $donasi = new Donasi;
        $donasi->judul_donasi = $req->input('judul_donasi');
        $donasi->deskripsi = $req->input('deskripsi_donasi');
        $donasi->collected = 0;
        $donasi->target = $req->input('target_donasi');

        if($req->hasFile('photo_donasi')){
            $photo = $req->file('photo_donasi');
            $fileName = time().$photo->getClientOriginalName();
            $photo->move($publicPath, $fileName);

            $donasi->donasi_photo = $fileName;
        }

        $donasi->save();

        return redirect()->route('admin_dashboard');
    }

    public function deleteDonation(Donasi $id){
        $id->delete();

        return redirect()->route('admin_dashboard')
            ->with('success','Data berhasil di hapus' );
    }

    // Documentation Page
    public function documentPage(){
        $dokum = Documentation::all();
        return view('adminpage.admin_documentation', compact('dokum'));
    }

    public function createDocum(){
        return view('adminpage.createDocum');
    }

    public function insertDocumentation(Request $req){
        $req->validate([
            'judul_dokum' => 'required|min:5',
            'deskripsi_dokum' => 'required|min:5',
            'photo_dokum' => 'image|mimes:png,jpg,jpeg,gif|max:2048'
        ]);

        $publicPath = public_path('dokumentation/');
        $docum = new Documentation;
        $docum->judul_dokum = $req->input('judul_dokum');
        $docum->deskripsi_dokum = $req->input('deskripsi_dokum');

        if($req->hasFile('photo_dokum')){
            $photo = $req->file('photo_dokum');
            $fileName = time().$photo->getClientOriginalName();
            $photo->move($publicPath, $fileName);

            $docum->photo_dokum = $fileName;
        }

        $docum->save();

        return redirect()->route('documentation_page');
    }

    public function deleteDocumentation(Documentation $id){
        $id->delete();

        return redirect()->route('documentation_page')
            ->with('success','Data berhasil di hapus' );
    }

//     public function store(Request $request){
//         $request->validate([
//             'jenis_donasi' => 'required|max:45',
//         ],
//         [
//             'jenis_donasi.required' => 'Jenis Donasi wajib diisi',
//         ]);

//         DB::table('donasis')->insert([
//             'jenis_donasi'=>$request->jenis_donasi,
//         ]);

//         return redirect()->route('index.index');
//     }

//     public function edit(Donasi $id){
//         //
//         return view('adminpage.edit_donasi', compact('id'));
//     }

//     public function update(Request $request, string $id){
//         // validasi data
//         $request->validate([
//             'jenis_donasi' => 'required|max:45',
//         ],
//         [
//             'jenis_donasi.required' => 'Jenis Donasi wajib diisi',
//         ]);

//         DB::table('donasis')->where('id',$id)->update([
//             'jenis_donasi'=>$request->jenis_donasi,
//         ]);

//         return redirect()->route('index.index');
//     }

//     public function destroy(Donasi $id){
//     $id->delete();

//     return redirect()->route(route: 'index.index')
//             ->with('success','Data berhasil di hapus' );
// }

}
