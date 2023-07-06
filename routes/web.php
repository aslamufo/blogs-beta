<?php

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

// Route::get('/', function () {
//     return view('welcome');s
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\BlogController::class, 'welcome'])->name('welcome');
Route::get('/home', [App\Http\Controllers\BlogController::class, 'index'])->name('index');
Route::get('/create-blog', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
Route::post('/store-blog', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
Route::get('/delete/{id}', [App\Http\Controllers\BlogController::class, 'delete'])->name('blog.delete');
Route::get('/view/{id}', [App\Http\Controllers\BlogController::class, 'view'])->name('blog.view');


Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return  "all cleared ...";

});