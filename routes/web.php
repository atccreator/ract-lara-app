<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'name' => 'Ankit',
    ]);
});

Route::get('/about', function () {
    return Inertia::render('About/About');
});

// Route::inertia('/', 'Home'); // Alternative way to define the route using Inertia