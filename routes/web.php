<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('home');
});
Route::view('lay','layout');
Route::view('home','home');
Route::view('list','list');
Route::view('update','update');
Route::post('create',[StudentController::class,'create']);
Route::get('home',[StudentController::class,'show']);
Route::get('list',[StudentController::class,'list']);
