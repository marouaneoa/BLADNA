<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;


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
    Route::get('/dashboard',[DashboardController::class,'user_chart' ]);
   

    Route::get('/role-register',[DashboardController::class,'registered' ]);
    Route::get('/role.edit/{id}',[DashboardController::class,'registeredit' ]);
    Route::put('/role.register.update/{id}',[DashboardController::class,'registerupdate' ]);
    Route::delete('/role.delete/{id}',[DashboardController::class,'registerdelete' ]);
    
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


    
    
    
});
// the shop part 
//showing the shop page 
Route::get('/shop_part/shopping', function () {
    return view('shop_part.shopping');
});
// show customize your order page 
Route::get('/shop_part/customize_order', function () {
    return view('shop_part.customize_order');
});
// show custome shop here page 
Route::get('/shop_part/custome_shop', function () {
    return view('shop_part.custome_shop');
});

// the posts part 
//showing the posts page 
Route::get('/posts_part/posts', function () {
    return view('posts_part.posts');
});


// become vendor section 
// update the phone number of the vendor 
Route::post('/home', [VendorController::class, 'store'])->name('users.store');


Route::get('/posts',[PostController::class, 'more'])->name('posts.more');
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/', [PostController::class, 'homePosts'])->name('home');
Route::get('/home', [PostController::class, 'homePosts'])->name('home');


Route::get('/posts/{post}/comments', [CommentController::class, 'show'])->name('comments.show');
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::post('/posts/{post}/like', [LikeController::class, 'store'])->name('like.store');


Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');