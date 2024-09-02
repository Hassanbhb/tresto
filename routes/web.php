<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

    Route::get('/', function () {
        return view('front.index');
    });

Route::get('/{locale}', function ($locale) {
    if (! in_array($locale, ['ar', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);
    Session::put('locale', $locale);

    return redirect()->back();
})->name('change.language');
