<?php

use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::get('/quotes', [QuoteController::class, 'getQuotes']);
