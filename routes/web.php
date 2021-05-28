<?php

use App\Http\Controllers\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsControlle;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Admin\SecondControlle;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaddd by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {

//     $date=[];
//     $date['id']=6;
//     $date['name']='hajar';

//     return view('welcome',$date);//->with('date',2);
// });

// Route::get('/test1', function () {
//     return 'welcome';
// });


// //Route peramters
// Route::get('/show-number/{id}', function ($id) {
//     return $id;
// })->name('a');
// Route::get('/show-string/{id?}', function () {
//     return 'welcome';
// })->name('b');


// Route::namespace('Front')->group(function(){
//     //all Route only access controller or method in folder name Front
  
//     Route::get('users', [UserController::class, 'showUserName']);
// });
// Route::group(['namespace'=>'users'],function(){
//     Route::get('users', [UserController::class, 'showUserName']);
// });

// // Route prefix
// // Route::prefix('users')->group(function(){
// //     Route::get('show', [UserController::class, 'showUserName']);
// //     Route::delete('delete', [UserController::class, 'showUserName']);
// //     Route::get('edit', [UserController::class, 'showUserName']);
// //     Route::put('update', [UserController::class, 'showUserName']);
// // });

// Route::group(['prefix'=>'users', 'middleware'=>'auth'],function(){
//     //set of Route
//     Route::get('show', [UserController::class, 'showUserName']);
//     Route::delete('delete', [UserController::class, 'showUserName']);
//     Route::get('edit', [UserController::class, 'showUserName']);
//     Route::put('update', [UserController::class, 'showUserName']);
// });

// Route::get('check',function(){
//     return 'middleware';
// })->middleware('auth');



// Route::group(['namespace'=>'Admin'],function(){
//     Route::get('second0', [SecondControlle::class, 'showString0'])->middleware('auth');
//     Route::get('second1', [SecondControlle::class, 'showString1']);
//     Route::get('second2', [SecondControlle::class, 'showString2']);
// });

// // Route::get('Login',function(){
// //     return 'Must Br Login TO access this Route';
// // })->name('login');


// Route::resource('news',NewsControlle::class);


// Route::get('index', [UserController::class, 'getIndex']);


// Route::get('/landing', function () {
//     return view('landing');
// });

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', function () {
    return view('welcome');
});
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');