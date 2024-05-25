<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShaduleController;
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

// User Routs
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about/about');
});
Route::get('/service', function () {
    return view('service/service');
});
Route::get('/contact', function () {
    return view('contact/contact');
});
Route::get('/dashboard', function () {
    return view('userDashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// Admin Routs
Route::resource('user', CreateUserController::class)->only('index');
Route::resource('shadule', ShaduleController::class)->only(['index', 'show']);
Route::resource('fees', FeeController::class)->only(['index', 'show']);

Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::resource('/admin/user', CreateUserController::class)->except('index');
    Route::resource('/admin/shadule', ShaduleController::class)->except(['index', 'show']);
    Route::resource('/admin/fees', FeeController::class)->except(['index', 'show']);
});


Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('admin.dashboard');
require __DIR__ . '/adminauth.php';
