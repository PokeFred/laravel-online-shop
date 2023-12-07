<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SearchController;

Route::get("/", [IndexController::class, "show"])->name("index");
Route::get("/search", [SearchController::class, "show"])->name("search");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
