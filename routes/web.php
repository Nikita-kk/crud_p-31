<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 Route::get('form',[formController::class,'form'])->name('form');
 Route::post('store',[formController::class,'store'])->name('store');

 Route::get('table',[formController::class,'table'])->name('table');
 Route::get('edit/{id}',[formController::class,'edit'])->name('edit');
 Route::post('update/{id}',[formController::class,'update'])->name('update');
 Route::get('delete/{id}',[formController::class,'delete'])->name('delete');
