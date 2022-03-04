<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\CategorieController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('animation',function(){
    return view('animation');
});
Route::get('gammeAlouer',function(){
    return view('gammeAlouer');
});
Route::get('voitureDetails',function(){
    return view('voitureDetails');
});
Route::get('faq',function(){
    return view('faq');
});
Route::get('connexion',function(){
    return view('connexion');
});

// *****************************ADMIN ROUTES****************************

Route::get('/admin', function(){
return view('dashbord');
});

Route::resource('admin/marques', MarqueController::class);
Route::resource('admin/categories', CategorieController::class);
Route::resource('admin/cars', CarController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
