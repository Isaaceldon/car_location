<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
Route::get('info',function(){
    return view('info');
});
Route::get('contact',function(){
    return view('contact');
});
Route::get('reserve',function(){
    return view('reserve');
});

Route::get('securite1',function(){
    return view('securite1');
});
Route::get('accueil',function(){
    return view('accueil');
});
Route::get('apropos',function(){
    return view('apropos');
});