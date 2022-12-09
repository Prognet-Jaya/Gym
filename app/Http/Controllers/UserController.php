<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use App\Models\training;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function masuk_order(Request $request){
       // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = 'SB-Mid-server-3bZMDVjPgNM5I-7VaL6JSEPJ';
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;
            
            $params = array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => 10000,
                ),
                'customer_details' => array(
                    'first_name' => 'budi',
                    'last_name' => 'pratama',
                    'email' => 'budi.pra@example.com',
                    'phone' => '08111222333',
                ),
                );
 
                $snapToken = \Midtrans\Snap::getSnapToken($params);
                
                return view('user.order',compact(['snapToken']));
    }

    public function list_training(){
        $daftar_training=training::all();
        return view('user.list_training',compact(['daftar_training']));
    }

    // public function dashboard(){
        
    //     return view('user.dashboard');
    // }

    public function add_cart(Request $request,$id){
       
            
            $user = Auth::user();
            $training=training::find($id);
            $cart = new cart;
            // $order->tanggal_order=now();
            $cart->nama_lengkap=$user->nama_lengkap;
            $cart->email=$user->email;
            $cart->umur=$user->umur;
            $cart->telepon=$user->telepon;
            $cart->alamat=$user->alamat;
            $cart->latihan=$training->nama_training;
            $cart->harga=$training->harga_training;
            $cart->id_user=$user->id;
            $cart->id_latihan=$training->id;
            $cart->gambar=$training->gambar;
            // $cart->metode_pembayaran=$request->pembayaran;
            $cart->save();

            
        
        // $tmp = DB::table('tb_order')
        // ->join('users', 'tb_order.id_user', '=', 'users.id')
        // ->join('training', 'tb_order.id_training', '=', 'training.id')
        
        // ->get();
        
        return view('user.list_training');
        
    }


    public function your_training(){
        return view('user.your_training');
    }

    public function prananda(){
        
        $id=Auth::user()->id;
        $prananda_cart=cart::where('id_user','=',$id)->get();
        return view('user.cart',compact(['prananda_cart']));
        
    }
    public function hapus_cart($id){
        $daftar_cart= cart::find($id);
        $daftar_cart->delete();
        return redirect()->back();   
    }
    public function userjadwal_training(){
        return view('user.userjadwal_training');
    }

    public function merchandise(){
        return view('user.merchandise');
    }

    public function status(){
        return view('user.status');
    }

    public function pembayaran(){

    }
}
