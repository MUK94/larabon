<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceListingsController;
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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Backend routes to dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware(['auth', 'verified']);


Route::get('/services', [ServiceListingsController::class, 'index'])->name('serviceListings.index');
Route::get('/services/{slug}', [ServiceListingsController::class, 'show'])->name('serviceListings.detail');
Route::post('/services', [ServiceListingsController::class, 'store'])->middleware(['auth', 'verified']);
Route::get('/add-service',[ServiceListingsController::class, 'create'])->name('serviceListings.create')->middleware(['auth', 'verified']);


Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/a-propos', [PagesController::class, 'about'])->name('pages.about');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');



require __DIR__.'/auth.php';
