<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserRegistrationController;


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
    return view('home');
});


Route::get('/about', [HomeController::class, 'About']);

Route::get('/contact',[HomeController::class, 'contact']);

Route::get('/service',[HomeController::class, 'service']);

Route::get('/property',[HomeController::class, 'property']);

//admin section start here

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){

    Route::controller(\AdminController::class)->group(function(){

          Route::get('/login','login');

          Route::post('login','ActionLogin');

          Route::get('/dashboard','dashboard');

          Route::get('/logout','Logout');

          Route::get('/','Logout');

    });



    Route::controller(\UserRegistrationController::class)->group(function(){


        Route::get('/user-reg','UserRegList');
        Route::get('/create-user-reg','create_user_reg');

        Route::post('/user_reg_save','userregSave');

       

  });



   

});