<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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
    return view('landing');
});

Route::get('/login', [MyController::class, 'login']);
Route::get('/signup', [MyController::class, 'signup']);
Route::post('/signup', [MyController::class, 'registerUser'])->name('register-user');


//Route::get('/login', function () {
   // return view('pages.login');
//});

//Route::get('/signup', function () {
   // return view('pages.signup');
//});

