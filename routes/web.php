<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboardcontroller;

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

Auth::routes();


Route::get('/auth/register', function () {
    return view('/auth/register');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth','admin']], function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });


    Route::get('/role-register',[Dashboardcontroller::class,'registered' ]);
    Route::get('/role.edit/{id}',[Dashboardcontroller::class,'registeredit' ]);
    Route::put('/role.register.update/{id}',[Dashboardcontroller::class,'registerupdate' ]);
    Route::delete('/role.delete/{id}',[Dashboardcontroller::class,'registerdelete' ]);
    
});
