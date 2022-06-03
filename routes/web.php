<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeledokterController;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\DiskusiController;
use App\Http\Controllers\UserController;

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
    return view('/auth/login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('home/pengguna', [MemberController::class, 'index']) -> name('pengguna');
Route::get('/tambahpengguna', [MemberController::class, 'tambahpengguna']) -> name('tambahpengguna');
Route::post('/insertpengguna', [MemberController::class, 'insertpengguna']) -> name('insertpengguna');

Route::get('/tampilkanpengguna/{id}', [MemberController::class, 'tampilpengguna']) -> name('tampilpengguna');
Route::post('/updatepengguna/{id}', [MemberController::class, 'updatepengguna']) -> name('updatepengguna');

Route::get('/deletepengguna/{id}', [MemberController::class, 'deletepengguna']) -> name('deletepengguna');

Route::get('home/profile', [UserController::class, 'index']) -> name('profile');
Route::get('/tampilkanprofile/{id}', [UserController::class, 'tampilprofile']) -> name('tampilprofile');
Route::post('/updateprofile/{id}', [UserController::class, 'updateprofile']) -> name('updateprofile');

Route::get('home/tentang', [AboutController::class, 'index']) -> name('tentang');
Route::get('/tambahtentang', [AboutController::class, 'tambahtentang']) -> name('tambahtentang');
Route::post('/inserttentang', [AboutController::class, 'inserttentang']) -> name('inserttentang');

Route::get('/tampilkantentang/{id}', [AboutController::class, 'tampiltentang']) -> name('tampiltentang');
Route::post('/updatetentang/{id}', [AboutController::class, 'updatetentang']) -> name('updatetentang');

Route::get('/deletetentang/{id}', [AboutController::class, 'deletetentang']) -> name('deletetentang');


Route::get('home/postingan', [PostController::class, 'index']) -> name('postingan');
Route::get('/tambahpostingan', [PostController::class, 'tambahpostingan']) -> name('tambahpostingan');
Route::post('/insertpostingan', [PostController::class, 'insertpostingan']) -> name('insertpostingan');

Route::get('/tampilkanpostingan/{id}', [PostController::class, 'tampilpostingan']) -> name('tampilpostingan');
Route::post('/updatepostingan/{id}', [PostController::class, 'updatepostingan']) -> name('updatepostingan');

Route::get('/deletepostingan/{id}', [PostController::class, 'deletepostingan']) -> name('deletepostingan');



Route::get('home/teledokter', [TeledokterController::class, 'index']) -> name('teledokter');
Route::get('/tambahteledokter', [TeledokterController::class, 'tambahteledokter']) -> name('tambahteledokter');
Route::post('/insertteledokter', [TeledokterController::class, 'insertteledokter']) -> name('insertteledokter');

Route::get('/tampilkanteledokter/{id}', [TeledokterController::class, 'tampilteledokter']) -> name('tampilteledokter');
Route::post('/updateteledokter/{id}', [TeledokterController::class, 'updateteledokter']) -> name('updateteledokter');

Route::get('/deleteteledokter/{id}', [TeledokterController::class, 'deleteteledokter']) -> name('deleteteledokter');




Route::get('home/edukasi', [EdukasiController::class, 'index']) -> name('edukasi');
Route::get('/tambahedukasi', [EdukasiController::class, 'tambahedukasi']) -> name('tambahedukasi');
Route::post('/insertedukasi', [EdukasiController::class, 'insertedukasi']) -> name('insertedukasi');

Route::get('/tampilkanedukasi/{id}', [EdukasiController::class, 'tampiledukasi']) -> name('tampiledukasi');
Route::post('/updateedukasi/{id}', [EdukasiController::class, 'updateedukasi']) -> name('updateedukasi');

Route::get('/deleteedukasi/{id}', [EdukasiController::class, 'deleteedukasi']) -> name('deleteedukasi');



Route::get('home/diskusi', [DiskusiController::class, 'index']) -> name('diskusi');
Route::get('/tambahdiskusi', [DiskusiController::class, 'tambahdiskusi']) -> name('tambahdiskusi');
Route::post('/insertdiskusi', [DiskusiController::class, 'insertdiskusi']) -> name('insertdiskusi');

Route::get('/tampilkandiskusi/{id}', [DiskusiController::class, 'tampildiskusi']) -> name('tampildiskusi');
Route::post('/updatediskusi/{id}', [DiskusiController::class, 'updatediskusi']) -> name('updatediskusi');

Route::get('/deletediskusi/{id}', [DiskusiController::class, 'deletediskusi']) -> name('deletediskusi');