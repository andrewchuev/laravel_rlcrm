<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*Route::get('/users', function () {
    return view('users');
})->middleware(['auth', 'verified'])->name('users');*/

Route::middleware(['auth', 'checkrole:admin'])->prefix('admin')->name('admin.')->group(function () {
    //Route::resource('roles', Admin\RoleController::class);
    //Route::resource('users', UserController::class);
    Route::get('/users', [UserController::class, 'index'])->name('users');
});

Route::get('/map', function () {
    return view('map');
})->middleware(['auth', 'verified'])->name('map');

Route::get('/drivers', function () {
    return view('drivers');
})->middleware(['auth', 'verified'])->name('drivers');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
