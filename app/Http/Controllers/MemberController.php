<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        $data = Member ::all();
        
        return view('pengguna/datapengguna',compact('data'));
    }

    public function tambahpengguna(){
        return view('pengguna/tambahpengguna');
    }

    public function insertpengguna(Request $request){
       $data = Member::create($request->all());
       if($request->hasFile('foto')){
           $request->file('foto')->move('fotomember/', $request->file('foto')->getClientOriginalName()); 
           $data->foto = $request->file('foto')->getClientOriginalName();
           $data->save();
       }
        return redirect()-> route('pengguna')->with('succes','Data Berhasil Di Tambahkan!');
    }
    
    public function tampilpengguna($id){
        $data = Member::find($id);
        return view('pengguna/tampilpengguna',compact('data'));
    }

    public function updatepengguna(Request $request, $id){
        $data = Member::find($id);
        $data->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomember/', $request->file('foto')->getClientOriginalName()); 
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()-> route('pengguna')->with('succes','Data Berhasil Di Ubah!');
    }

    public function deletepengguna($id){
        $data = Member::find($id);
        $data->delete();
        
        return redirect()-> route('pengguna')->with('succes','Data Berhasil Di Hapus!');
    }
}
