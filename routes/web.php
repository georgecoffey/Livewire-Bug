<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'test_show_form']);
Route::post('/', [TestController::class, 'test_save']);
