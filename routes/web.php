<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
Route::get("/", [IndexController::class, "show"])->name("index");
