<?php

use App\Http\Controllers\PackageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Product;
use App\Models\Package;

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
    $postbanner=Post::wheretype("BANNER")->orderBy('created_at', 'desc')->first();
    $poststory=Post::wheretype("OURSTORY")->orderBy('created_at', 'desc')->first();
    $products=Product::all();
    $pricings=Package::all();
    return view('welcome',compact('postbanner','poststory','products','pricings'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/post', [PostController::class, 'store'])->name('post.add');
Route::get('/post/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::patch('/post/{id}/update', [PostController::class, 'update'])->name('post.update');
Route::get('/post/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy');


//Services
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::post('/product/add', [ProductController::class, 'store'])->name('product.add');
Route::get('/product/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::patch('/product/{id}/update', [ProductController::class, 'update'])->name('product.update');
Route::get('/products/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');


//pricing
Route::get('/prices', [PackageController::class, 'index'])->name('prices');
Route::post('/price/add', [PackageController::class, 'store'])->name('price.add');
Route::get('/price/{id}', [PackageController::class, 'edit'])->name('price.edit');
Route::patch('/price/{id}/update', [PackageController::class, 'update'])->name('price.update');
Route::get('/price/delete/{id}', [PackageController::class, 'destroy'])->name('price.destroy');