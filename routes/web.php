<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
  

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

//Route::get('/admin/login',[HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/admin/manage', [HomeController::class, 'adminManage'])->name('admin.manage')->middleware('is_admin');
Route::get('/admin/add', [HomeController::class, 'adminAdd'])->name('admin.add')->middleware('is_admin');
Route::post('/admin/user/add', [HomeController::class, 'adminCreate'])->name('user.create')->middleware('is_admin');
Route::get('/admin/search', [HomeController::class, 'adminSearch'])->name('admin.search')->middleware('is_admin');