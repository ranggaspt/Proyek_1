<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $data = Post ::all();
        
        return view('postingan/datapostingan',compact('data'));
    }

    public function tambahpostingan(){
        return view('postingan/tambahpostingan');
    }

    public function insertpostingan(Request $request){
       $data = Post::create($request->all());
       if($request->hasFile('foto')){
           $request->file('foto')->move('fotopost/', $request->file('foto')->getClientOriginalName()); 
           $data->foto = $request->file('foto')->getClientOriginalName();
           $data->save();
       }
        return redirect()-> route('postingan')->with('succes','Data Berhasil Di Tambahkan!');
    }
    
    public function tampilpostingan($id){
        $data = Post::find($id);
        return view('postingan/tampilpostingan',compact('data'));
    }

    public function updatepostingan(Request $request, $id){
        $data = Post::find($id);
        $data->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotopost/', $request->file('foto')->getClientOriginalName()); 
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()-> route('postingan')->with('succes','Data Berhasil Di Ubah!');
    }

    public function deletepostingan($id){
        $data = Post::find($id);
        $data->delete();
        
        return redirect()-> route('postingan')->with('succes','Data Berhasil Di Hapus!');
    }
}
