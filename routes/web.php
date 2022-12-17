<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
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

Route::get('/form-fillup',[formController::class,'getdata']);
Route::post('/saveData',[formController::class,'savedata'])->name('save');

Route::get('/viewData',[formController::class,'viewdata'])->name('view');

Route::get('/editData/{id}',[formController::class,'editdata'])->name('edit');
Route::post('/saveUpdate',[formController::class,'updatedata'])->name('update');
Route::post('/delete',[formController::class,'deletedata'])->name('delete');