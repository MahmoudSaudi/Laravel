<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\TelegramController;





Route::get('/updated-activity',[TelegramController::class, 'updatedActivity']);
Route::get('/',[TelegramController::class, 'sendMessage']);

Route::get('/send-message',[TelegramController::class, 'storeMessage']);
Route::get('/store-photo',[TelegramController::class, 'storePhoto']);

// Route::get('/', function () {
//     return view('welcome');
// });



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/post/admin',function()
{

    if (View::exists('admin.index'))
    {
        return 'successfly';
    }
});



Route::get('/post/admin',function()
{

    return View::first(['users.create', 'admin.index']);
});





Route::get('users/test/cont',[TestController::class,'index']);



Route::get('/test1',[TestController::class,'show']);
Route::get('/test2',[TestController::class,'index']);




Route::get('/users/tests',function()
{
    //return View::first(['users.create','users.index'],['name'=>'Saudi']);
    return view('users.test')->with('Fname','mahmoud')->with('Lname','saudi');
});







Route::get('/', function () {
    return view('welcome');
});


Route::view('/Users','users',['names'=>'Mahmoud Saudi']);
*/


/*
if you want redirect

Route::get('/test', function () {
    return redirect()->route('ali');
});

Route::get('/tests/admin/saudi', function () {
    return '<h1> Welcome Mahmoud </h1>';
})->name('ali');




// if you want call ---->>   http://localhost:82/Laravel/Store/public/Users/90/names/saudi
Route::get('Users/{id}/names/{name}',function($id,$name)
{
    return 'Users id = '.$id." and names : ".$name;
});


Route::get('/Users/{name?}',function($name='Abdo')
{
    return $name;
});


// using get
Route::get('/test',function()
{
    return view('users',['names'=>'saudi']);
});
// using view
Route::view('esst','users',['names'=>'Mohamed']);




Route::get('/admin/panal',function()
{
    return view('admin.index');
});

Route::view('/users/panal','users.index');
*/















