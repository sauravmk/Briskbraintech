<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;



/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth','isAdmin')->group(function (){

   Route::get('/dashboard',[DashboardController::class,'index']);
   Route::get('/category',[CategoryController::class,'index'])->name('admin.category.index');
   Route::get('/add-category',[CategoryController::class,'create']);
   Route::post('/add-category',[CategoryController::class,'store']);  
   Route::get('/edit-category/{category}', [CategoryController::class, 'edit'])->name('admin.category.edit');
   Route::put('/edit-category/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
   Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

   Route::get('/posts', [PostController::class, 'index'])->name('admin.posts.index');
//    Route::get('/posts/fetch_data', [PostController::class, 'fetch_data'])->name('admin.posts.fetch_data');
   Route::get('/add-post', [PostController::class, 'create']);
   Route::post('/add-post', [PostController::class, 'store']);
   Route::get('/edit-post/{post}', [PostController::class, 'edit'])->name('edit-post');
   Route::put('/update-post/{post}', [PostController::class, 'update'])->name('update-post');
   Route::delete('/delete-post/{post}', [PostController::class, 'destroy'])->name('delete-post');
   
}); 