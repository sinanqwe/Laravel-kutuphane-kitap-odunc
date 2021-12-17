<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::redirect('anasayfa', '/home')->name('anasayfa');


Route::get('/', function () {
    return view('home.index');
});



Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('home');



Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

