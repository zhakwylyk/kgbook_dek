<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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


        Route::group(['namespase' => 'Main'], function (){
            Route::get('/', [App\Http\Controllers\Main\IndexController::class, 'index'])->name('welcome');    
        });

        Route::group(['namespase' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth','admin']], function (){
            Route::group(['namespase' => 'Main'], function (){
                Route::get('/', [App\Http\Controllers\Admin\Main\IndexController::class,'index']);    
            });

            //POST
        Route::group(['namespase' => 'Post', 'prefix' => 'posts'], function (){
            Route::get('/',[App\Http\Controllers\Admin\Post\IndexController::class,'index'])->name('admin.post.index');    
            Route::get('/create',[App\Http\Controllers\Admin\Post\CreateController::class,'index'])->name('admin.post.create');    
            Route::post('/',[App\Http\Controllers\Admin\Post\StoreController::class,'index'])->name('admin.post.store');    
            Route::get('/{post}',[App\Http\Controllers\Admin\Post\ShowController::class,'index'])->name('admin.post.show');    
            Route::get('/{post}/edit',[App\Http\Controllers\Admin\Post\EditController::class,'index'])->name('admin.post.edit');    
            Route::patch('/{post}',[App\Http\Controllers\Admin\Post\UpdateController::class,'index'])->name('admin.post.update');    
            Route::delete('/{post}',[App\Http\Controllers\Admin\Post\DeleteController::class,'index'])->name('admin.post.delete');    
            });
                
            //CATEGORY
        Route::group(['namespase' => 'Category', 'prefix' => 'categories'], function (){
            Route::get('/',[App\Http\Controllers\Admin\Category\IndexController::class,'index'])->name('admin.category.index');    
            Route::get('/create',[App\Http\Controllers\Admin\Category\CreateController::class,'index'])->name('admin.category.create');    
            Route::post('/',[App\Http\Controllers\Admin\Category\StoreController::class,'index'])->name('admin.category.store');    
            Route::get('/{category}',[App\Http\Controllers\Admin\Category\ShowController::class,'index'])->name('admin.category.show');    
            Route::get('/{category}/edit',[App\Http\Controllers\Admin\Category\EditController::class,'index'])->name('admin.category.edit');    
            Route::patch('/{category}',[App\Http\Controllers\Admin\Category\UpdateController::class,'index'])->name('admin.category.update');    
            Route::delete('/{category}',[App\Http\Controllers\Admin\Category\DeleteController::class,'index'])->name('admin.category.delete');    
            });
    
            //TAGS
        Route::group(['namespase' => 'Tag', 'prefix' => 'tags'], function (){
            Route::get('/',[App\Http\Controllers\Admin\Tag\IndexController::class,'index'])->name('admin.tag.index');    
            Route::get('/create',[App\Http\Controllers\Admin\Tag\CreateController::class,'index'])->name('admin.tag.create');    
            Route::post('/',[App\Http\Controllers\Admin\Tag\StoreController::class,'index'])->name('admin.tag.store');    
            Route::get('/{tag}',[App\Http\Controllers\Admin\Tag\ShowController::class,'index'])->name('admin.tag.show');    
            Route::get('/{tag}/edit',[App\Http\Controllers\Admin\Tag\EditController::class,'index'])->name('admin.tag.edit');    
            Route::patch('/{tag}',[App\Http\Controllers\Admin\Tag\UpdateController::class,'index'])->name('admin.tag.update');    
            Route::delete('/{tag}',[App\Http\Controllers\Admin\Tag\DeleteController::class,'index'])->name('admin.tag.delete');    
            });

                  //USER
        Route::group(['namespase' => 'User', 'prefix' => 'users'], function (){
            Route::get('/',[App\Http\Controllers\Admin\User\IndexController::class,'index'])->name('admin.user.index');    
            Route::get('/create',[App\Http\Controllers\Admin\User\CreateController::class,'index'])->name('admin.user.create');    
            Route::post('/',[App\Http\Controllers\Admin\User\StoreController::class,'index'])->name('admin.user.store');    
            Route::get('/{user}',[App\Http\Controllers\Admin\User\ShowController::class,'index'])->name('admin.user.show');    
            Route::get('/{user}/edit',[App\Http\Controllers\Admin\User\EditController::class,'index'])->name('admin.user.edit');    
            Route::patch('/{user}',[App\Http\Controllers\Admin\User\UpdateController::class,'index'])->name('admin.user.update');    
            Route::delete('/{user}',[App\Http\Controllers\Admin\User\DeleteController::class,'index'])->name('admin.user.delete');    
            });
            
        });

            Auth::routes();







