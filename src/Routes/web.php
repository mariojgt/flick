<?php

use Illuminate\Support\Facades\Route;
use Mariojgt\Flick\Controllers\FlickController;

// Setup controller
Route::group([
    'prefix'     => '',
    'middleware' => ['web']
], function () {
    //load the standad view for example only
    Route::get('/flick', [FlickController::class , 'index'])->name('flick');
    // Route::get('/onix/ckeditor', [PageBuilderController::class , 'ckEditor'])->name('onix.ckeditor');
    // Route::post('/onix/save_page_example/{id}', [PageBuilderController::class , 'save'])->name('onix.save_page_example');
    // Route::get('/onix/load_post_example/{id}', [PageBuilderController::class , 'load'])->name('onix.load_post_example');
});
