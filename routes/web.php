<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::redirect('anasayfa', '/home')->name('anasayfa');


Route::get('/', function () {
    return view('home.index');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('home');

//admin
Route::middleware('auth')->prefix('admin')->group(function(){

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    //category
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

    //books
    Route::prefix('books')->group(function(){
        Route::get('/', [\App\Http\Controllers\Admin\BooksController::class, 'index'])->name('admin_books');
        Route::get('create', [\App\Http\Controllers\Admin\BooksController::class, 'create'])->name('admin_books_add');
        Route::post('store', [\App\Http\Controllers\Admin\BooksController::class, 'store'])->name('admin_books_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\BooksController::class, 'edit'])->name('admin_books_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\BooksController::class, 'update'])->name('admin_books_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\BooksController::class, 'destroy'])->name('admin_books_delete');
        Route::get('show', [\App\Http\Controllers\Admin\BooksController::class, 'show'])->name('admin_books_show');
    });
    
    
});

//admin
//Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome')->middleware('auth');;

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

