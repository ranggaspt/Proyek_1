<?php

namespace App\Http\Controllers;

use App\Models\Teledokter;
use Illuminate\Http\Request;

class TeledokterController extends Controller
{
    public function index(){
        $data = Teledokter ::all();
        
        return view('teledokter/datateledokter',compact('data'));
    }

    public function tambahteledokter(){
        return view('teledokter/tambahteledokter');
    }

    public function insertteledokter(Request $request){
       $data = Teledokter::create($request->all());
       if($request->hasFile('foto')){
           $request->file('foto')->move('fototeledokter/', $request->file('foto')->getClientOriginalName()); 
           $data->foto = $request->file('foto')->getClientOriginalName();
           $data->save();
       }
        return redirect()-> route('teledokter')->with('succes','Data Berhasil Di Tambahkan!');
    }
    
    public function tampilteledokter($id){
        $data = Teledokter::find($id);
        return view('teledokter/tampilteledokter',compact('data'));
    }

    public function updateteledokter(Request $request, $id){
        $data = Teledokter::find($id);
        $data->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fototeledokter/', $request->file('foto')->getClientOriginalName()); 
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()-> route('teledokter')->with('succes','Data Berhasil Di Ubah!');
    }

    public function deleteteledokter($id){
        $data = Teledokter::find($id);
        $data->delete();
        
        return redirect()-> route('teledokter')->with('succes','Data Berhasil Di Hapus!');
    }
}
