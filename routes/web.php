<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SearchController;

Route::get("/", [IndexController::class, "show"])->name("index");
Route::get("/search", [SearchController::class, "show"])->name("search");
