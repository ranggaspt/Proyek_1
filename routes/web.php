<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AboutController;

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
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('home/pengguna', [MemberController::class, 'index']) -> name('pengguna');
Route::get('/tambahpengguna', [MemberController::class, 'tambahpengguna']) -> name('tambahpengguna');
Route::post('/insertpengguna', [MemberController::class, 'insertpengguna']) -> name('insertpengguna');

Route::get('/tampilkanpengguna/{id}', [MemberController::class, 'tampilpengguna']) -> name('tampilpengguna');
Route::post('/updatepengguna/{id}', [MemberController::class, 'updatepengguna']) -> name('updatepengguna');

Route::get('/deletepengguna/{id}', [MemberController::class, 'deletepengguna']) -> name('deletepengguna');



Route::get('home/tentang', [AboutController::class, 'index']) -> name('tentang');
Route::get('/tambahtentang', [AboutController::class, 'tambahtentang']) -> name('tambahtentang');
Route::post('/inserttentang', [AboutController::class, 'inserttentang']) -> name('inserttentang');

Route::get('/tampilkantentang/{id}', [AboutController::class, 'tampiltentang']) -> name('tampiltentang');
Route::post('/updatetentang/{id}', [AboutController::class, 'updatetentang']) -> name('updatetentang');

Route::get('/deletetentang/{id}', [AboutController::class, 'deletetentang']) -> name('deletetentang');