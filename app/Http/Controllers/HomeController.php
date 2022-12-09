<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class HomeController extends Controller
{
    // public function menu(){
    //     return view('home.menu');
    // }
    public function redirect(){
        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
            return view('admin.homeadmin');
        }else if($usertype =='2'){
            return view('trainer.halaman');
        }
        else{
            return view('user.halaman');
        }
    }
}
