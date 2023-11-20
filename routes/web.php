<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('home', function(){
    return view('404');
});
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate']);
Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout']);

Route::get('/register', [App\Http\Controllers\registerController::class, 'index'])->middleware('guest');
Route::post('/register', [App\Http\Controllers\registerController::class, 'store']);


// Route::group(['middleware' => ['auth', 'isAdmin']], function () {
Route::group(['middleware' => 'isAdmin'], function () {
    Route::get('/',[App\Http\Controllers\DashboardController::class,'index']);
    Route::get('/data_pelatih',[App\Http\Controllers\DashboardController::class,'data_pelatih']);
    Route::post('data_pelatih/create',[App\Http\Controllers\DashboardController::class,'data_pelatih_store'])->name('data_pelatih.store');
    Route::get('data_pelatih/edit/{id}',[App\Http\Controllers\DashboardController::class,'data_pelatih_edit'])->name('data_pelatih.edit');
    Route::get('data_pelatih/detail/{id}',[App\Http\Controllers\DashboardController::class,'data_pelatih_detail'])->name('data_pelatih.detail');
    Route::put('data_pelatih/update/{id}',[App\Http\Controllers\DashboardController::class,'data_pelatih_update'])->name('data_pelatih.update');
    Route::get('data_pelatih/delete/{id}',[App\Http\Controllers\DashboardController::class,'data_pelatih_destroy'])->name('data_pelatih.destroy');
    
    Route::get('/cari_data',[App\Http\Controllers\DashboardController::class,'cari_data']);
    Route::get('/jadwal_kegiatan',[App\Http\Controllers\DashboardController::class,'jadwal_kegiatan']);    
    Route::post('/jadwal_kegiatan',[App\Http\Controllers\DashboardController::class,'jadwal_kegiatan_create'])->name('jadwal_kegiatan.create');    
    Route::get('jadwal_kegiatan/detail/{id}',[App\Http\Controllers\DashboardController::class,'jadwal_kegiatan_detail'])->name('jadwal_kegiatan.detail');
    Route::get('jadwal_kegiatan/edit/{id}',[App\Http\Controllers\DashboardController::class,'jadwal_kegiatan_edit'])->name('jadwal_kegiatan.edit');

    Route::put('jadwal_kegiatan/update/{id}',[App\Http\Controllers\DashboardController::class,'jadwal_kegiatan_update'])->name('jadwal_kegiatan.update');
    Route::get('jadwal_kegiatan/delete/{id}',[App\Http\Controllers\DashboardController::class,'jadwal_kegiatan_destroy'])->name('jadwal_kegiatan.destroy');
    
    
    Route::get('data_peserta',[App\Http\Controllers\DashboardController::class,'data_peserta']);
    Route::post('data_peserta/create',[App\Http\Controllers\DashboardController::class,'data_peserta_store'])->name('data_peserta.store');
    Route::get('data_peserta/edit/{id}',[App\Http\Controllers\DashboardController::class,'data_peserta_edit'])->name('data_peserta.edit');
    Route::get('data_peserta/detail/{id}',[App\Http\Controllers\DashboardController::class,'data_peserta_detail'])->name('data_peserta.detail');
    Route::put('data_peserta/update/{id}',[App\Http\Controllers\DashboardController::class,'data_peserta_update'])->name('data_peserta.update');
    Route::get('data_peserta/delete/{id}',[App\Http\Controllers\DashboardController::class,'data_peserta_destroy'])->name('data_peserta.destroy');
    

    Route::get('/input_data_nilai',[App\Http\Controllers\DashboardController::class,'input_data_nilai_index']);    
    Route::get('/input_data_nilai/edit/{id}',[App\Http\Controllers\DashboardController::class,'input_data_nilai_edit']);    
    Route::get('/input_data_nilai/detail/{id}',[App\Http\Controllers\DashboardController::class,'input_data_nilai_detail']);    
    Route::put('/input_data_nilai/{id}',[App\Http\Controllers\DashboardController::class,'input_data_nilai_update']);    
    Route::get('/input_data_nilai/delete/{id}',[App\Http\Controllers\DashboardController::class,'input_data_nilai_delete']);    



    Route::get('/input_data_nilai/create',[App\Http\Controllers\DashboardController::class,'input_data_nilai']);    
    Route::post('/input_data_nilai',[App\Http\Controllers\DashboardController::class,'input_data_nilai_post']);    


});
Route::group(['middleware' => ['auth']], function () {

    Route::get('/data_nilai_peserta',[App\Http\Controllers\DashboardController::class,'data_nilai_peserta']);    

    Route::get('dashboard_user',[App\Http\Controllers\DashboardController::class,'dashboard_user']);
    Route::get('profile',[App\Http\Controllers\DashboardController::class,'profile']);
    Route::put('profile/edit/{id}',[App\Http\Controllers\DashboardController::class,'profile_edit']);

    Route::post('/password/update', [App\Http\Controllers\DashboardController::class, 'update_password'])->name('password.update');

    Route::get('/jadwal_kegiatan_user',[App\Http\Controllers\DashboardController::class,'jadwal_kegiatan_user']);    
    Route::get('jadwal_kegiatan_user/detail/{id}',[App\Http\Controllers\DashboardController::class,'jadwal_kegiatan_user_detail'])->name('jadwal_kegiatan_user.detail');
    
});
