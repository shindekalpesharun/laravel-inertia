<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return inertia::render(
        'Home',
        [
            'username' => "shindekalpesharun"
        ]
    );
});

Route::get('/users', function () {
    return inertia::render('Users', [
        'users' => User::all()->map(fn ($user) => [
            'name' => $user->name
        ])
    ]);
});

Route::get('/settings', function () {
    return inertia::render('Settings');
});

Route::post('/logout', function () {
    dd('logging user out');
});
