<?php
use app\http\Controllers\FakultasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




route::get('/profil',function(){
    return view('profil');
});

Route::resource('/Fakultas', FakultasController::class);


;