<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = User::all();
        
        return view('profile/dataprofile',compact('data'));
    }
    
    public function tampilprofile($id){
        $data = User::find($id);
        return view('profile/tampilprofile',compact('data'));
    }

    public function updateprofile(Request $request, $id){
        $data = User::find($id);
        $data->update($request->all());

        return redirect()-> route('profile')->with('succes','Data Berhasil Di Ubah!');
    }
}
