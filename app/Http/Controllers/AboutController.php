<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $data = About ::all();
        
        return view('tentang/datatentang',compact('data'));
    }

    public function tambahtentang(){
        return view('tentang/tambahtentang');
    }

    public function inserttentang(Request $request){
        About::create($request->all());
        return redirect()-> route('tentang')->with('succes','Data Berhasil Di Tambahkan!');
    }
    
    public function tampiltentang($id){
        $data = About::find($id);
        return view('tentang/tampiltentang',compact('data'));
    }

    public function updatetentang(Request $request, $id){
        $data = About::find($id);
        $data->update($request->all());

        return redirect()-> route('tentang')->with('succes','Data Berhasil Di Ubah!');
    }

    public function deletetentang($id){
        $data = About::find($id);
        $data->delete();
        
        return redirect()-> route('tentang')->with('succes','Data Berhasil Di Hapus!');
    }
}
