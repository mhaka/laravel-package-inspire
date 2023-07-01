<?php

use Mhaka\Inspire\Controllers;
use Illuminate\Support\Facades\Route;
use Mhaka\Inspire\Controllers\InspirationController;

Route::get('inspire', InspirationController::class);