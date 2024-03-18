<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\UserController;

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

Route::get('generateData', [AuthController::class, 'generateData']);

Route::get('/', function () {
    return view('home');
})->middleware('is.auth');

Route::get('login', [AuthController::class, 'showLogin'])->middleware('is.not.auth');
Route::post('login', [AuthController::class, 'actionLogin'])->middleware('is.not.auth');

Route::middleware(['is.auth'])->group(function () {

    Route::get('logout', [AuthController::class, 'actionLogout']);

    Route::get('transactions', [TransactionController::class, 'index']);
    Route::get('transactions/create', [TransactionController::class, 'create']);

    Route::resource('customers', CustomerController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('users', UserController::class);
    Route::resource('stuffs', StuffController::class);
});

// Route::get('customers', [CustomerController::class, 'index']);
// Route::get('customers/create', [CustomerController::class, 'create']);
// Route::post('customers', [CustomerController::class, 'store']);
// Route::get('customers/{customer}', [CustomerController::class, 'show']);
// Route::put('customers/{customer}', [CustomerController::class, 'update']);
// Route::delete('customers/{customer}', [CustomerController::class, 'destroy']);

// Route::get('categories', [CategoryController::class, 'index']);
// Route::get('categories/create', [CategoryController::class, 'create']);
// Route::post('categories', [CategoryController::class, 'store']);
// Route::get('categories/{category}', [CategoryController::class, 'show']);
// Route::put('categories/{category}', [CategoryController::class, 'update']);
// Route::delete('categories/{category}', [CategoryController::class, 'destroy']);

// Route::get('users', [CustomerController::class, 'index']);
// Route::get('users/create', [CustomerController::class, 'create']);
// Route::post('users', [CustomerController::class, 'store']);
// Route::get('users/{user}', [CustomerController::class, 'show']);
// Route::put('users/{user}', [CustomerController::class, 'update']);
// Route::delete('users/{user}', [CustomerController::class, 'destroy']);

// Route::get('stuffs', [StuffController::class, 'index']);
// Route::get('stuffs/create', [StuffController::class, 'create']);
// Route::post('stuffs', [StuffController::class, 'store']);
// Route::get('stuffs/{stuff}', [StuffController::class, 'show']);
// Route::put('stuffs/{stuff}', [StuffController::class, 'update']);
// Route::delete('stuffs/{stuff}', [StuffController::class, 'destroy']);
