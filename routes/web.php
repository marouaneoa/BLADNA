<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ItemController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth','admin']], function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });


    Route::get('/role-register',[Dashboardcontroller::class,'registered' ]);
    Route::get('/role.edit/{id}',[Dashboardcontroller::class,'registeredit' ]);
    Route::put('/role.register.update/{id}',[Dashboardcontroller::class,'registerupdate' ]);
    Route::delete('/role.delete/{id}',[Dashboardcontroller::class,'registerdelete' ]);
    
    Route::get('/regions', [RegionController::class, 'index']);
    Route::post('/save-region',[RegionController::class, 'store']);
    Route::get('/regions/{id}', [RegionController::class, 'edit']);
    Route::put('/regions-update/{id}',[RegionController::class, 'update']);
    Route::delete('/regions-delete/{id}',[RegionController::class, 'delete']);

    Route::get('/categories', [CategoryController::class, 'index']);
    Route::post('/save-categories',[CategoryController::class, 'store']);
    Route::get('/categories/{id}', [CategoryController::class, 'edit']);
    Route::put('/categories-update/{id}',[CategoryController::class, 'update']);
    Route::delete('/categories-delete/{id}',[CategoryController::class, 'delete']);


    Route::get('/items', [ItemController::class, 'index']);
    Route::post('/save-item',[ItemController::class, 'store']);
    Route::get('/items/{id}', [ItemController::class, 'edit']);
    Route::put('/items-update/{id}',[ItemController::class, 'update']);
    Route::delete('/items-delete/{id}',[ItemController::class, 'delete']);

   


    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

    Route::post('/posts/{post}/comments', [CommentsController::class, 'store'])->name('comments.store');
    Route::put('/comments/{comment}', [CommentsController::class, 'update'])->name('comments.update');
    Route::delete('/comments/{comment}', [CommentsController::class, 'destroy'])->name('comments.destroy');


});
