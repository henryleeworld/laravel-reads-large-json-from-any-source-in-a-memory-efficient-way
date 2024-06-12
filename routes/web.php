<?php

use App\Http\Controllers\JsonParserController;
use Illuminate\Support\Facades\Route;

Route::get('parse/', [JsonParserController::class, 'parse']);
