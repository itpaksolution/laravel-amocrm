<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/requests/save', [\App\Http\Controllers\AdminController::class,'request_save'])
  ->name('request.save');
