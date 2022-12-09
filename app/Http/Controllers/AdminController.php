<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\trainer;
use App\Models\training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use function PHPUnit\Framework\returnSelf;

class AdminController extends Controller
{
    public function data_pembayaran(){
        return view('admin.data_pembayaran');
    }

    public function data_member(){

        $data_member= User::all()
        ->where('usertype', '=', '0')
        ;

        return view('admin.data_member',compact(['data_member']));
    }

    public function daftar_latihan(){
        $daftar_training= training::all();
        return view('admin.daftar_latihan',compact(['daftar_training']));
    }

    public function tambah_training(Request $request){
        
        
        $produk=new training;
        $produk->nama_training=$request->nama_training;
        $produk->harga_training=$request->harga_training;
        $produk->slot=$request->slot;
        $produk->deskripsi=$request->deskripsi;
        $gambar=$request ->gambar;
        $gambarnama=time().'.'.$gambar->getClientOriginalExtension();
        $request->gambar->move('latihan',$gambarnama);
        $produk->gambar=$gambarnama;
        $produk->save();
        return redirect()->back()->with('message','berhasil menmbahkan training');
    }

    public function ubah_training(Request $request,$id){
        $daftar_training= training::find($id);
        $daftar_training->update($request->except(['_token','submit']));
        return redirect('admin.daftar_latihan',compact(['daftar_training']));
    }

    public function hapus_training($id){
        $daftar_training= training::find($id);
        $daftar_training->delete();
        return Redirect('/daftar_latihan');   
    }

    public function daftar_trainer(){ 
        $daftar_trainer= trainer::all();
        return view('admin.daftar_trainer',compact(['daftar_trainer']));
    }

    public function update_member($id, Request $request){
        
        $update_member= User::find($id);
        $update_member->update($request->except(['_token','submit']));
        return redirect('/data_member',compact(['update_member']));

    }

    public function delete_member($id){
        $update_member= User::find($id);
        $update_member->delete();
        return redirect('/data_member');

    }
}
