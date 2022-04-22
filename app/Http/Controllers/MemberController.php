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
        Member::create($request->all());
        return redirect()-> route('pengguna')->with('succes','Data Berhasil Di Tambahkan!');
    }
    
    public function tampilpengguna($id){
        $data = Member::find($id);
        return view('pengguna/tampilpengguna',compact('data'));
    }

    public function updatepengguna(Request $request, $id){
        $data = Member::find($id);
        $data->update($request->all());

        return redirect()-> route('pengguna')->with('succes','Data Berhasil Di Ubah!');
    }

    public function deletepengguna($id){
        $data = Member::find($id);
        $data->delete();
        
        return redirect()-> route('pengguna')->with('succes','Data Berhasil Di Hapus!');
    }
}
