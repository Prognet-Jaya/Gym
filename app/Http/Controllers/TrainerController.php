<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function list_member(){
        return view('trainer.list_member');
    }

    public function jadwal_training(){
        return view('trainer.jadwal_training');
    }

}
