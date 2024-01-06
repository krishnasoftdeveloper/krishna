<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;


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
    return view('viewlogin');
});


Route::post('/login', [AuthController::class, 'loginAdmin']);


Route::group(['middleware' => 'disable_back_btn'], function () {
Route::group(['middleware' => 'admin_auth'], function () {
  
Route::get('/front-home', [FrontController::class, 'frontHome']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/dashboard', [AuthController::class, 'dashboard']);
Route::get('/my_profile', [ProfileController::class, 'my_profile']);
Route::get('/manage_staff', [ProfileController::class, 'manage_staff']);



});

});

