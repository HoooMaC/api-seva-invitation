<?php
use App\Http\Controllers\api\GreetingController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Api
Route::get('/api/get', [GreetingController::class, 'getAll']);
Route::post('/api/new-greeting', [GreetingController::class, 'getAll']);