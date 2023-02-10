<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\frontEndcontroller;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\Postcontroller;
use App\Models\product;
use App\Models\category;
use Laravel\Socialite\Facades\Socialite;
use Darryldecode\Cart\Facades\CartFacade;



use Illuminate\Support\Facades\Auth;

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

 

Route::get('/profile' , [ProfileController::class , 'index']);
Route::get('/profile/create' , [ProfileController::class , 'create']);
Route::get('/profile/edit/{id}' , [ProfileController::class , 'edit']);

 // Route::gpet('/store' , [ProfileController::class , 'store']);

//regstter page //
 Route::get('/reg' , [AuthController::class , 'getRegiser']);
 Route::post("user/store" , [AuthController::class , 'handleRegister']);
Route::post("/user/storelogin" , [AuthController::class , 'handleLogin']);
Route::get("user/login" ,[AuthController::class , 'getlogin']);
Route::get("user/logout" ,[AuthController::class , 'logout']);

 



//only admin
Route::middleware("isAdmin")->group(function(){
    
    Route::get("edit/user/{id}" ,[AuthController::class , 'edit']);
    Route::post("update/user" ,[AuthController::class , 'update']);
    // Route::get("/users/create" , [UsersController::class , "create"]);
    Route::post('/add' , [UsersController::class , 'store']);
    
    Route::get("delete/user/{id}" ,[AuthController::class , 'delete']);



    Route::get('/category/edit/{id}' , [CategoriesController::class , 'edit']);//admin

Route::get('/category/delete/{id}' , [CategoriesController::class , 'destroy']);//admin

Route::post('/category/update' , [CategoriesController::class , 'update']);//admin



Route::post("/product/update" , [ProductsController::class , "update"]);//admin
Route::get("/product/edit/{id}" , [ProductsController::class , "edit"]);//admin
Route::get("/product/delete/{id}" , [ProductsController::class , "destroy"]);//admin


Route::post('/post/update' ,[Postcontroller::class , "update"] );
Route::get('/post/delete/{id}' ,[Postcontroller::class , "destroy"] );
Route::get('/post/edit/{id}' ,[Postcontroller::class , "edit"] );
Route::get('/post/show/{id}' ,[Postcontroller::class , "show"] );

});




//admin and moderator
Route::middleware("ismoderator")->group(function(){

    Route::get('/dashbord', function () {
        return view('layouts.app');
    });
    Route::get("all/user" , [UsersController::class , "index"]);



    Route::get('admin/create', function () {
        return view('includes.createing');
    });
    
   
Route::get('/category' , [CategoriesController::class , 'index']); //admin and medretor
Route::get('/category/create' , [CategoriesController::class , 'create']);////admin and medretor
Route::post('/category/store' , [CategoriesController::class , 'store']);////admin and medretor


Route::get("/product/create" , [ProductsController::class , "create"]); //admin and medretor
Route::post("/product/store" , [ProductsController::class , "store"]);// admin and medretorn


Route::get('/post/create' ,[Postcontroller::class , "create"] );
Route::post('/post/store' ,[Postcontroller::class , "store"] );

 
});



Route::post('update/profile' , [ProfileController::class , 'update']);


 

// // prudct 

Route::get("/product" , [ProductsController::class , "index"]); //all
Route::get("/product/show/{id}" , [ProductsController::class , "show"]); //all

 


















Route::get("/" , [frontEndcontroller::class , "show"]); //all
Route::get("/blog" , [frontEndcontroller::class , "blog"]); //all
Route::get("/proudct/Category/{id}" , [frontEndcontroller::class , "index"]);//all


Route::get("/proudct/Category" , [frontEndcontroller::class , "test"]);//all
 




Route::post('/cart/list' , [CartsController::class,"cartList"]);
Route::post('/cart' , [CartsController::class,"cart"]);
Route::get('/cart/delete/{id}' , [CartsController::class,"delete"]);







// blog rout 





 

Route::get('/cart/show/{id}' , [CartsController::class,"show"]);
Route::get('/cart/edit/{id}' , [CartsController::class,"edit"]);
Route::get('/cart' , [CartsController::class,"index"]);
Route::post('/cart/store' , [CartsController::class,"store"]);
  Route::get('/cart/{id}' , [CartsController::class,"show"]);

Route::get('/cart/addtocart/{id}' , [CartsController::class,"addTocart"]);
Route::get('/cart/get/{id}' , [CartsController::class,"getcard"]);

 


Route::get('/results' , function(){
    $proudcts = product::where('content' , 'like' , '%' . request('query') . '%')->get();
    return view("results")->with("proudcts" , $proudcts)
    ->with('categories' ,category::take(3)->get())
    ->with('content' , 'search results :' . request('query'))
    ->with('query' , request('query'));

});




Route::get('/post' ,[Postcontroller::class , "index"] );
 Route::get('/post/show/{id}' ,[Postcontroller::class , "show"] );



