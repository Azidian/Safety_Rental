<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route variables and concatenation
$homeRoute = '/';
$aboutRoute = '/about';
$contactRoute = '/contact';
$productRoute = '/products';

// Home and About routes
Route::get($homeRoute, [HomeController::class, 'index'])->name('home.index');
Route::get($aboutRoute, [HomeController::class, 'about'])->name('home.about');

// Contact route
Route::get($contactRoute, [ContactController::class, 'index'])->name('home.contact');

// Product routes
Route::get($productRoute, [ProductController::class, 'index'])->name('product.index');
Route::get($productRoute.'/create', [ProductController::class, 'create'])->name('product.create');
Route::post($productRoute.'/save', [ProductController::class, 'save'])->name('product.save');

// Dynamic route using {id} to capture the parameter automatically
Route::get($productRoute.'/{id}', [ProductController::class, 'show'])->name('product.show');
