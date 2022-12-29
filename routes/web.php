<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.main');
});
Route::get('/material', function () {
    return view('material');
});

Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/expert', function () {
    return view('pages.expert');
});
Route::get('/kadastr', function () {
    return view('pages.kadastr');
});
Route::get('/estate_reg', function () {
    return view('pages.estate_reg');
});
Route::get('/documents', function () {
    return view('pages.documents');
});

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Кэш очищен.";
});
