<?php
use Illuminate\\Support\\Facades\\Route;

Route::get('/', function () {
    return redirect()->route('partner.dashboard');
});

Route::get('/dashboard', function () {
    return view('partner.dashboard');
})->name('partner.dashboard');

Route::get('/products', function () {
    return view('partner.products');
})->name('partner.products');

Route::get('/support', function () {
    return view('partner.support');
})->name('partner.support');

Route::get('/withdraw', function () {
    return view('partner.withdraw');
})->name('partner.withdraw');

Route::get('/domain-branding', function () {
    return view('partner.domain-branding');
})->name('partner.domain-branding');