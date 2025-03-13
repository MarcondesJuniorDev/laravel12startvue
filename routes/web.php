<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('users', function () {
    return Inertia::render('users/Index');
})->middleware(['auth', 'verified'])->name('users');

Route::get('permissions', function () {
    return Inertia::render('permissions/Index');
})->middleware(['auth', 'verified'])->name('permissions');

Route::get('roles', function () {
    return Inertia::render('roles/Index');
})->middleware(['auth', 'verified'])->name('roles');


require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
