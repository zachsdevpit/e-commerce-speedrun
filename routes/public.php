<?php

// Public Routes
use App\Http\Controllers\Public\ProductCategoryController;
use App\Http\Controllers\Public\ProductController;
use App\Http\Controllers\Public\ReviewController;
use App\Http\Controllers\Public\VendorController;

// Product Browsing
Route::get('products', [ProductController::class, 'index']); // List all products
Route::get('products/{product}', [ProductController::class, 'show']); // Show product details

// Categories
Route::get('product-categories', [ProductCategoryController::class, 'index']); // List all categories
Route::get('product-categories/{category}', [ProductCategoryController::class, 'show']); // Show category products

// Vendor Information
Route::get('vendors/{vendor}', [VendorController::class, 'show']); // Show vendor details

// Reviews
Route::get('products/{product}/reviews', [ReviewController::class, 'index']); // List product reviews
