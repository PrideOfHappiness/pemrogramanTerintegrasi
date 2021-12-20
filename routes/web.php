<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthSekretarisController;
use App\Models\User;
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
    return view('dashboard\navbar');
})->middleware('guest');

//Mahasiswa
Route::get('/sekretaris', function(){
    return view ('sekretaris\loginSekretaris');
})->middleware('guest');
//Route::get('/sekretaris/Home', 'AuthSekretarisController@dashboard')->name('dashboard')->middleware('auth');
Route::post('/sekretaris/Home', 'AuthSekretarisController@login')->name('login');
Route::post('/logoutSekretaris', 'AuthSekretarisController@logout')->name('logout');
Route::get('/sekretaris/Home/BuatUndangan', function () {
    return view('sekretaris\buatUndangan');
})->middleware('auth');


?>
