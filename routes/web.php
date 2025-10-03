<?php

use App\Http\Controllers\Client\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/product-list',function(){
    return view('Pages.Client.product-list');
});


Route::get('/custom-design',function(){
    return view('Pages.Client.custom-design');
});

Route::get('/blog',function(){
    return view('Pages.Client.blog');
});

Route::get('/quality',function(){
    return view('Pages.Client.quality');
});

Route::get('/gift-box',function(){
    return view('Pages.Client.gift-box');
});



Route::get('/', [HomePageController::class, 'index']);