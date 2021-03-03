<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::resources('/post', [PostController::class, 'index']);

// Route::get('/user/{name?}', function ($name = null){
//     return "hai ".$name;
// });

// Route::view('/hello', 'hello', ['name' => 'Layung']);

// Route::view('/hello', 'hello'); //persingkat

// Route::get('/hello', function () {
//     return view('hello');
// });

// Route::view('/hello','/hello');
// Route::redirect('/','/hello');

Route::view('/try', 'tryblade.child');
