<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::resource('product', [App\Http\Controllers\ProductController::class]); error
// Route::get('/test1',[TestController::class,'show']);


Route::resource('product',ProductController::class);

Route::get('/',function()
{
 return redirect()->route('product.index');
});