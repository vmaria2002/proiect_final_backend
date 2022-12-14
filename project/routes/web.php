<?php

use App\Http\Controllers\LiveSearchController;
use App\Http\Controllers\LiveSearchUserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;
use \App\Http\Controllers\ProductsController;
use \App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\VerificationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|\
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('\dashboard');
});
Auth::routes(['verify' => true]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::group(['middleware' => 'auth'], function () {

// Route::resource('/', \App\Http\Controllers\ProductsController::class);
// Route::get('cart', [ ProductsController::class, 'cart']);
// Route::get('add-to-cart/{id}', [ProductsController::class,'addToCart']);

// Route::get('update-cart', [ProductsController::class, 'update']);
// Route::get('remove-from-cart', [ProductsController::class,'remove']);
// });

Route::group(['middleware' => 'auth'], function () {
    Route::resource('verification', \App\Http\Controllers\VerificationController::class);
    Route::resource('tasks', \App\Http\Controllers\TaskController::class);
    Route::resource('student', \App\Http\Controllers\StudentController::class);
    Route::resource('search', \App\Http\Controllers\LiveSearchController::class);
    Route::resource('searchUser', \App\Http\Controllers\LiveSearchUserController::class);
    Route::resource('searchProducts', \App\Http\Controllers\LiveSearchProductsController::class);


    Route::resource('onlineshopping', \App\Http\Controllers\ProductsController::class);
    Route::get('cart', [ProductsController::class, 'cart']);
    Route::get('favorites', [ProductsController::class, 'favorites']);
    Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart']);
    Route::get('addToFavorites/{id}', [ProductsController::class, 'addToFavorites']);
    

    Route::get('update-cart/{id}/{cantity}', [ProductsController::class, 'update']);
    Route::get('remove-from-cart/{id}', [ProductsController::class, 'remove']);
    Route::get('remove-from-favorites/{id}', [ProductsController::class, 'removeFromFavorites']);


    Route::get('delete-from-cart/{id}', [ProductsController::class, 'delete']);
    Route::get('details/{id}', [ProductsController::class, 'details']);
   

    Route::resource('emails', \App\Http\Controllers\HomeController::class);
    Route::resource('users', \App\Http\Controllers\UserController::class);
    Route::resource('invite', \App\Http\Controllers\InviteController::class);

 Route::get('buy/{id}/{message}', [UserController::class, 'buy']);
    Route::get('send-mail', [MailController::class, 'index']);
    Route::get('send-mail', [MailController::class, 'index']);


    Route::get('/send', '\App\Http\Controllers\HomeController@send')->name('home.send');
    Route::get('account/verify/', [AuthController::class, 'verifyAccount'])->name('user.verify');
    // Route::get('/send', '\App\Http\Controllers\HomeController@send')->name('home.send');
    Route::get('/action3', [LiveSearchProductsController::class, 'action3'])->name('action3');
    Route::get('/action1', [LiveSearchController::class, 'action1'])->name('action1');
    Route::get('/action', [LiveSearchUserController::class, 'action'])->name('action');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
