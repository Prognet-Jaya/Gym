<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.menu');
});
// route::get('/',[HomeController::class,'menu']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/daftar_latihan',[AdminController::class,'daftar_latihan']);
route::put('/daftar_latihan/{id}',[AdminController::class,'ubah_training']);
route::delete('/daftar_latihan/{id}',[AdminController::class,'hapus_training']);
route::POST('/daftar_latihan',[AdminController::class,'tambah_training']);

route::get('/redirect',[HomeController::class,'redirect']);
route::get('/data_pembayaran',[AdminController::class,'data_pembayaran']);
route::get('/data_member',[AdminController::class,'data_member']);

route::get('/daftar_trainer',[AdminController::class,'daftar_trainer']);
route::put('/data_member/{id}',[AdminController::class,'update_member']);
route::delete('/data_member/{id}',[AdminController::class,'delete_member']);


route::get('/list_training',[UserController::class,'list_training']);
route::get('/your_training',[UserController::class,'your_training']);
route::get('/userjadwal_training',[UserController::class,'userjadwal_training']);
route::get('/merchandise',[UserController::class,'merchandise']);
route::get('/status',[UserController::class,'status']);
route::get('/list_training',[UserController::class,'list_training']);
route::post('/add_cart/{id}',[UserController::class,'add_cart']);
route::get('/hapus_cart/{id}',[UserController::class,'hapus_cart']);
route::get('/anjay',[UserController::class,'masuk_order']);
// route::get('/dashboard',[UserController::class,'dashboard']);

route::get('/list_member',[TrainerController::class,'list_member']);
route::get('/jadwal_training',[TrainerController::class,'jadwal_training']);

route::get('/prananda',[UserController::class,'prananda']);

