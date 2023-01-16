<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;


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
Route::get('/dashbord', function () {
    return view('app');
});



Route::get("/users/create" , [UsersController::class , "create"]);
 Route::post('/add' , [UsersController::class , 'store']);


//regstter page //
 Route::get('/reg' , [AuthController::class , 'getRegiser']);
 Route::post("user/store" , [AuthController::class , 'handleRegister']);
Route::post("/user/storelogin" , [AuthController::class , 'handleLogin']);
Route::get("user/login" ,[AuthController::class , 'getlogin']);
Route::get("user/logout" ,[AuthController::class , 'logout']);
Route::get("edit/user/{id}" ,[AuthController::class , 'edit']);
Route::post("update/user" ,[AuthController::class , 'update']);

