<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});
Route::get('/about', function() {
    return view('about');
});
Route::get('/contact', function() {
    return view('contact');
});
Route::get('/service', function() {
    return view('service');
});
Route::get('/showcases', function() {
    return view('showcases');
});
Route::get('/blog', function() {
    return view('blog');
});  