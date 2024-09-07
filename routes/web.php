<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    // dd("here");
    return redirect('/fr');
});

Route::prefix('{locale}')->group(function () {
    Route::get('/', function () {
        return view('front.index');
    })->name('home');
    
    Route::get('/contact', function () {
        return view('front.contact');
    })->name('contact');
    
    Route::get('/features', function () {
        return view('front.features');
    })->name('features');

    Route::get('/tarifs', function () {
        return view('front.tarifs');
    })->name('tarifs');
    
    Route::get('/blog', function () {
        return view('front.blog');
    })->name('blog');
    
    Route::get('/post', function () {
        return view('front.post');
    })->name('post');
});