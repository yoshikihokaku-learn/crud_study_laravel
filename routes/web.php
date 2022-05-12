<?php

use App\Http\Controllers\DriverController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/f1/drivers',[DriverController::class,'index'])->name('drivers');
Route::get('/f1/create',[DriverController::class,'create'])->name('create');
Route::post('/f1/store',[DriverController::class,'store'])->name('store');
Route::get('/f1/edit/{id}',[DriverController::class,'edit'])->name('edit');
Route::post('/f1/update/{id}',[DriverController::class,'update'])->name('update');
Route::get('/f1/delete/{id}',[DriverController::class,'delete'])->name('delete');
Route::post('/f1/destroy/{id}',[DriverController::class,'destroy'])->name('destroy');

Auth::routes();