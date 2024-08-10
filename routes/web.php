<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;



// SITE CONTROLLER 

    // ALL USERS

    Route::controller(SiteController::class)->group(function(){

        // SINGLE SERVE PAGES
        Route::get('/', 'viewHome');

    });