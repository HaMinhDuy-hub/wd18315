<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;




// http://127.0.0.1:8000/  base url
// GET, POST, PUT, PATCH, DELETE  (method http)


Route::get('/', function() {
    echo 'Trang chu';
});

Route::get('/test', function(){
    echo 'abc';
});

// Dieu huong qua action cua controller
// php artisan make:controller TenController

Route::get('list-product', [ProductController::class, 'showProduct']);

// Gui du lieu qua controller
//Slug
//http://127.0.0.1:8000/get-product/4/iphone
Route::get('get-product/{id}/{name?}', [ProductController::class, 'getProduct']);


//Params
//http://127.0.0.1:8000/update-product?id=4&name=iphone
Route::get('update-product', [ProductController::class, 'updateProduct']);

Route::get('/thongtinsv', [App\Http\Controllers\SinhVienController::class, 'index']);


