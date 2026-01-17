<?php

use App\Http\Controllers\Api\AiController;
use Illuminate\Support\Facades\Route;

Route::post('/ai/chat', [AiController::class, 'chat']);
