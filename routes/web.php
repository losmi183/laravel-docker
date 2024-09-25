<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    dump('666666666666');
    dump('123');
    phpinfo();
});

Route::get('/users', [UserController::class, 'users']);
