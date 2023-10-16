<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\PageMetadataController;



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about',[App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('/contact',[App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::get('/portfolio',[App\Http\Controllers\HomeController::class,'portfolio'])->name('portfolio');
Route::get('/service',[App\Http\Controllers\HomeController::class,'service'])->name('service');
Route::get('/Yii',[App\Http\Controllers\HomeController::class,'Yii'])->name('Yii');
Route::get('/Codeigniter',[App\Http\Controllers\HomeController::class,'Codeigniter'])->name('Codeigniter');
Route::get('/Laravel',[App\Http\Controllers\HomeController::class,'Laravel'])->name('Laravel');
Route::get('/Magento',[App\Http\Controllers\HomeController::class,'Magento'])->name('Magento');
Route::get('/WordPress',[App\Http\Controllers\HomeController::class,'WordPress'])->name('WordPress');
Route::get('/PHP',[App\Http\Controllers\HomeController::class,'PHP'])->name('PHP');
Route::get('/Ruby',[App\Http\Controllers\HomeController::class,'Ruby'])->name('Ruby');

Route::get('/',[FrontendController::class,'index']);
Route::get('/home', [FrontendController::class, 'index'])->name('home');
Route::get('/blog',[FrontendController::class,'blog'])->name('blog');
Route::get('/blogsingle/{post_id}',[FrontendController::class,'blogsingle'])->name('blogsingle');

//For Comments
Route::post('comments', [CommentController::class, 'store'])->name('comments.store');

Route::prefix('admin')->middleware('auth','isAdmin')->group(function (){

   Route::get('/dashboard',[DashboardController::class,'index']);
   Route::get('/category',[CategoryController::class,'index'])->name('admin.category.index');
   Route::get('/add-category',[CategoryController::class,'create']);
   Route::post('/add-category',[CategoryController::class,'store']);  
   Route::get('/edit-category/{category}', [CategoryController::class, 'edit'])->name('admin.category.edit');
   Route::put('/edit-category/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
   Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

   Route::get('/posts', [PostController::class, 'index'])->name('admin.posts.index');
   Route::get('/add-post', [PostController::class, 'create']);
   Route::post('/add-post', [PostController::class, 'store']);
   Route::get('/edit-post/{post}', [PostController::class, 'edit'])->name('edit-post');
   Route::put('/update-post/{post}', [PostController::class, 'update'])->name('update-post');
   Route::delete('/delete-post/{post}', [PostController::class, 'destroy'])->name('delete-post');

   Route::get('/settings',[SettingsController::class,'index']);
   Route::post('/settings',[SettingsController::class,'savedata']);

   //Route::resource('/page-metadata', PageMetadataController::class);
   Route::get('/page-metadata', [PageMetadataController::class, 'index'])->name('admin.page-metadata.index');
   Route::get('/page-metadata/create', [PageMetadataController::class, 'create'])->name('admin.page-metadata.create');
   Route::post('admin/page-metadata', [PageMetadataController::class, 'store'])->name('admin.page-metadata.store');
   Route::get('admin/page-metadata/{id}/edit', [PageMetadataController::class, 'edit'])
    ->name('admin.page-metadata.edit');
    Route::delete('admin/page-metadata/{id}', [PageMetadataController::class, 'destroy'])
    ->name('admin.page-metadata.destroy');
    Route::put('admin/page-metadata/{id}', [PageMetadataController::class, 'update'])
    ->name('admin.page-metadata.update');

}); 