<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;



Route::get('/', function () {
    return view('front.index');
})->name('home');

Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');

Route::get('/features', function () {
    return view('front.features');
})->name('features');

Route::get('/blog', function () {
    return view('front.blog');
})->name('blog');

Route::get('/post', function () {
    return view('front.post');
})->name('post');


Route::get('/{locale}', function ($locale) {
    if (! in_array($locale, ['ar', 'fr', 'en'])) {
        abort(400);
    }

    App::setLocale($locale);
    Session::put('locale', $locale);

    return redirect()->back();
})->name('change.language');