<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;

Route::redirect('anasayfa', '/home')->name('anasayfa');



Route::get('/', function () {
    return view('home.index');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/books/{id}', [HomeController::class, 'books'])->name('books');
Route::get('/categorybooks/{id}', [HomeController::class, 'categorybooks'])->name('categorybooks');
Route::get('/addtocart/{id}', [HomeController::class, 'addtocart'])->name('addtocart');



//admin
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    Route::prefix('category')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
        Route::get('add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
    });

    //books
    Route::prefix('book')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\BookController::class, 'index'])->name('admin_book');
        Route::get('create', [\App\Http\Controllers\Admin\BookController::class, 'create'])->name('admin_book_add');
        Route::post('store', [\App\Http\Controllers\Admin\BookController::class, 'store'])->name('admin_book_store');
        Route::get('edit{id}', [\App\Http\Controllers\Admin\BookController::class, 'edit'])->name('admin_book_edit');
        Route::post('update{id}', [\App\Http\Controllers\Admin\BookController::class, 'update'])->name('admin_book_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\BookController::class, 'destroy'])->name('admin_book_delete');
        Route::get('show', [\App\Http\Controllers\Admin\BookController::class, 'show'])->name('admin_book_show');
    });
    //image
    Route::prefix('image')->group(function () {
        Route::get('create/{id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{book_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
    });

    //setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('category/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

    #Message
    Route::prefix('messages')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
        Route::get('edit{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');
    });

    
});


Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {

    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');

    #Reservation
    Route::prefix('reservation')->group(function () {

        Route::get('/', [ReservationController::class, 'index'])->name('user_reservations');
        Route::post('store', [ReservationController::class, 'store'])->name('user_reservation_store');
        Route::post('update/{id}', [ReservationController::class, 'update'])->name('user_reservation_update');
        Route::get('delete/{id}', [ReservationController::class, 'destroy'])->name('user_reservation_delete');
    });
});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {

    Route::get('/', [UserController::class, 'index'])->name('userprofile');
});

//admin
//Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome')->middleware('auth');;

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('admin_logout');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
