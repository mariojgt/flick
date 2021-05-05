<?php

use Illuminate\Support\Facades\Route;
use Mariojgt\Flick\Controllers\FlickController;

// Example Controller
Route::group([
    'middleware' => ['web']
], function () {
    // Load flick example view
    Route::get('/flick', [FlickController::class, 'index'])->name('flick');
});
