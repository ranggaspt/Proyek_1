<?php

namespace App\Http\Controllers;

use App\Models\Edukasi;
use Illuminate\Http\Request;

class EdukasiController extends Controller
{
    public function index(){
        $data = Edukasi ::all();
        
        return view('edukasi/dataedukasi',compact('data'));
    }

    public function tambahedukasi(){
        return view('edukasi/tambahedukasi');
    }

    public function insertedukasi(Request $request){
        Edukasi::create($request->all());
        return redirect()-> route('edukasi')->with('succes','Data Berhasil Di Tambahkan!');
    }
    
    public function tampiledukasi($id){
        $data = Edukasi::find($id);
        return view('edukasi/tampiledukasi',compact('data'));
    }

    public function updateedukasi(Request $request, $id){
        $data = Edukasi::find($id);
        $data->update($request->all());
        
        return redirect()-> route('edukasi')->with('succes','Data Berhasil Di Ubah!');
    }

    public function deleteedukasi($id){
        $data = Edukasi::find($id);
        $data->delete();
        
        return redirect()-> route('edukasi')->with('succes','Data Berhasil Di Hapus!');
    }
}
