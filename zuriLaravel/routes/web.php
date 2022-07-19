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
Route::get('/find_known_user', function () {
    return view('edituser');
});

Route::post('/createuser',[UserController::class, 'createUser']);
Route::post('/find_known_user',[UserController::class, 'findKnownUser']);
Route::post('/edituser',[UserController::class, 'editUser']);

