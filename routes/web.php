<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\reservationController;

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

Route::get('info',function(){
    return view('info');
});
Route::get('contact',function(){
    return view('contact');
});
Route::get('reserve1',[reservationController::class, 'create']);
Route::post('reservation',[reservationController::class, 'store'])->name('reservation');



Route::get('securite1',function(){
    return view('securite1');
});
//  Route::get('/',function(){
//      return view('accueil');
//  });
Route::get('apropos',function(){
    return view('apropos');
});


// *****************************ADMIN ROUTES****************************

Route::get('/admin', function(){
return view('dashbord');
});

Route::resource('admin/marques', MarqueController::class);
Route::resource('admin/categories', CategorieController::class);
Route::resource('admin/cars', CarController::class);



Auth::routes();

Route::get('/', [HomeController::class, 'index']);