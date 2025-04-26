<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin.components.dashboard');
});

Route::get('/them-danh-muc', function () {
    return view('admin.components.categories.create');
})->name('categories.create');

Route::get('/danh-muc', function () {
    return view('admin.components.categories.index');
})->name('categories.index');
Route::get('/san-pham', function () {
    return view('admin.components.product.index');
})->name('product.index');
Route::get('/them-san-pham', function () {
    return view('admin.components.product.create');
})->name('product.create');

Route::get('/khach-hang', function () {
    return view('admin.components.customers.index');
})->name('customers.index');

Route::get('/don-hang', function () {
    return view('admin.components.orders.index');
})->name('orders.index');

Route::get('/chi-tiet-don-hang', function () {
    return view('admin.components.orders.details');
})->name('orders.details');
