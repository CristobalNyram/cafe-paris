<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;



use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,"index"])->name('index_home');
Route::get('/contacto', [HomeController::class,"contacto"])->name('contacto');
Route::get('/menu', [HomeController::class,"menu"])->name('menu');
Route::get('/crear_cuenta', [HomeController::class,"crear_cuenta"])->name('crear_cuenta');
Route::post('/create_user', [HomeController::class,"create_user"])->name('create_user');



#rutas para el apartado de login
Route::prefix('admin')->group(function () {
    Route::get('/', [LoginController::class,"show_login"])->middleware('guest')->name('index_login');


    Route::get('/dashboard', [AdminController::class,"dashboard"])->middleware('auth')->name('dashboard');
    Route::get('/reportes', [AdminController::class,"report_excel"])->middleware('auth')->name('report_excel');


    Route::get('/buscar_alumno', [AdminController::class,"buscar_alumno"])->middleware('auth')->name('buscar_alumno');



    //registro
    Route::get('/register', [AdminController::class,"registration_users"])->middleware('auth')->name('registration_users');

    //noticias
    Route::get('/news', [NewsController::class,"index"])->middleware('auth')->name('news_index');

    //usuarios
    Route::get('/users', [AdminController::class,"users_index"])->middleware('auth')->name('users_index');

    Route::get('/products', [ProductsController::class,"index"])->middleware('auth')->name('product_index');
    Route::get('/products/add', [ProductsController::class,"create"])->middleware('auth')->name('products_add');
    Route::post('/products/store', [ProductsController::class,"store"])->middleware('auth')->name('products_store');
    Route::delete('/products/delete/{product}', [ProductsController::class,"destroy"])->middleware('auth')->name('products_delete');

    Route::get('/orders', [OrdersController::class,"index"])->middleware('auth')->name('ordes_index');





    // Route::get('/news/create', [NewsController::class,"create"])->middleware('auth')->name('news_create');
    // Route::post('/news/store', [NewsController::class,"store"])->middleware('auth')->name('news_store');


    ///login y logout
    Route::post('/login', [LoginController::class,"login"])->name('login');
    Route::post('/logout', [LoginController::class,"logout"])->name('logout');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
