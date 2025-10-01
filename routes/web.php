<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/product-list',function(){
    return view('product-list');
});


Route::get('/custom-design',function(){
    return view('custom-design');
});

Route::get('/blog',function(){
    return view('blog');
});

Route::get('/quality',function(){
    return view('quality');
});

Route::get('/gift-box',function(){
    return view('Gift-box');
});