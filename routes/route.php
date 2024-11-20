<?php
use Support\Route;
use Support\View;
use Support\AuthMiddleware; //<-- Penambahan Middleware atau session login

// handleMiddleware();
Route::get('/',function(){
    // View::render('welcome/welcome');
    return view('home/home',[],'layout/app');
});