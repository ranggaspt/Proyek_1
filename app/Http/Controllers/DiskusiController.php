<?php

namespace App\Http\Controllers;

use App\Models\Diskusi;
use Illuminate\Http\Request;

class DiskusiController extends Controller
{
    public function index(){
        $data = Diskusi ::all();
        
        return view('diskusi/datadiskusi',compact('data'));
    }

    public function tambahdiskusi(){
        return view('diskusi/tambahdiskusi');
    }

    public function insertdiskusi(Request $request){
        Diskusi::create($request->all());
        return redirect()-> route('diskusi')->with('succes','Data Berhasil Di Tambahkan!');
    }
    
    public function tampildiskusi($id){
        $data = Diskusi::find($id);
        return view('diskusi/tampildiskusi',compact('data'));
    }

    public function updatediskusi(Request $request, $id){
        $data = Diskusi::find($id);
        $data->update($request->all());
        
        return redirect()-> route('diskusi')->with('succes','Data Berhasil Di Ubah!');
    }

    public function deletediskusi($id){
        $data = Diskusi::find($id);
        $data->delete();
        
        return redirect()-> route('diskusi')->with('succes','Data Berhasil Di Hapus!');
    }
}
