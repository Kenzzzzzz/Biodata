<?php

use App\Http\Controllers\BiodataController;

Route::get('/biodata', [BiodataController::class, 'index']);


// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
