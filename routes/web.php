<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\BookController;

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
Route::get('/book/{id}', [HomeController::class, 'book'])->name('book');
Route::get('/categorybooks/{id}', [HomeController::class, 'categorybooks'])->name('categorybooks');

Route::post('/getbook', [HomeController::class, 'getbook'])->name('getbook');
Route::get('/booklist/{search}', [HomeController::class, 'booklist'])->name('booklist');



//admin
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::middleware('admin')->group(function () {
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
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\BookController::class, 'edit'])->name('admin_book_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\BookController::class, 'update'])->name('admin_book_update');
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

        #Faq
        Route::prefix('faq')->group(function () {

            Route::get('/', [FaqController::class, 'index'])->name('admin_faq');
            Route::get('create', [FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('store', [FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('edit{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('update{id}', [FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('delete/{id}', [FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('show', [FaqController::class, 'show'])->name('admin_faq_show');
        });

        #Message
        Route::prefix('messages')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
            Route::get('edit{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');
        });

        Route::prefix('reservation')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\ReservationController::class, 'index'])->name('admin_reservation');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'edit'])->name('admin_reservation_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'update'])->name('admin_reservation_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'destroy'])->name('admin_reservation_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ReservationController::class, 'show'])->name('admin_reservation_show');
        });

        #Review
        Route::prefix('review')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');
        });

        //Admin user
        Route::prefix('user')->group(function () {


            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::post('create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
        });
    });
});


Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {

    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}', [UserController::class, 'destroymyreview'])->name('user_review_delete');
});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {

    Route::get('/', [UserController::class, 'index'])->name('userprofile');

    #Book
    Route::prefix('book')->group(function () {

        Route::get('/', [BookController::class, 'index'])->name('user_books');
        Route::get('create', [BookController::class, 'create'])->name('user_book_add');
        Route::post('store', [BookController::class, 'store'])->name('user_book_store');
        Route::get('edit/{id}', [BookController::class, 'edit'])->name('user_book_edit');
        Route::post('update/{id}', [BookController::class, 'update'])->name('user_book_update');
        Route::get('delete/{id}', [BookController::class, 'destroy'])->name('user_book_delete');
        Route::get('show', [BookController::class, 'show'])->name('user_book_show');
    });
    #Book Image Gallery
    Route::prefix('image')->group(function () {

        Route::get('create/{book_id}', [\App\Http\Controllers\ImageController::class, 'create'])->name('user_image_add');
        Route::post('store/{book_id}', [\App\Http\Controllers\ImageController::class, 'store'])->name('user_image_store');
        Route::get('delete/{id}/{book_id}', [\App\Http\Controllers\ImageController::class, 'destroy'])->name('user_image_delete');
        Route::get('show', [\App\Http\Controllers\ImageController::class, 'show'])->name('user_image_show');
    });


    #Reservation
    Route::prefix('reservation')->group(function () {

        Route::get('/', [\App\Http\Controllers\ReservationController::class, 'index'])->name('user_reservations');
        Route::get('create/{book_id}', [\App\Http\Controllers\ReservationController::class, 'create'])->name('user_reservation_add');
        Route::get('edit/{id}', [\App\Http\Controllers\ReservationController::class, 'edit'])->name('user_reservation_edit');
        Route::post('store/{book_id}', [\App\Http\Controllers\ReservationController::class, 'store'])->name('user_reservation_store');
        Route::post('update/{id}', [\App\Http\Controllers\ReservationController::class, 'update'])->name('user_reservation_update');
        Route::get('destroy/{id}', [\App\Http\Controllers\ReservationController::class, 'destroy'])->name('user_reservation_delete');
    });
});

//admin
//Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome')->middleware('auth');;

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('admin_logout');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
