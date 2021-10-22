<?php

use Illuminate\Support\Facades\Route;

Route::get('/amocrm/get_token', [\App\Http\Controllers\AmoCRMController::class, 'get_token'])
  ->middleware('auth') // Add this to integrate with Fortify and get your key safer and only in control panel
  ->name('amocrm.integrate');
