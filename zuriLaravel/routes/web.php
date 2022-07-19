<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/Editusers', function () {
    return view('useredit');
});

Route::get('/Users', function () {
    return view('hello');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/createuser', function () {
    return view('createuser');
});

Route::post('/createuser',[UserController::class, 'createUser']);
