<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto',function(){
        return view('contacto');

});

Route::get('/post',function(){
        return view('contacto');

});

Route::get('/about',function(){
        return view('contacto');
});

Route::get('/dashboard',function(){
        return view('admin.dashboard');
});