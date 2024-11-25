<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'Home']) -> name('Home');

// user
Route::get('/Dashboard', [UserController::class, 'Home']) -> name('Dashboard') -> middleware('User');
Route::get('/Rental', [UserController::class, 'Rental']) -> name('Catalog.Rent');

// user end


Route::get('/Coin', [UserController::class, 'Koin']) -> name('coin.user') -> middleware('Laravel');
// regis 
Route::get('/Register', [AuthController::class, 'Register']) -> name('register.user');
Route::post('/Register', [AuthController::class, 'Regispost']) -> name('Regis.post');
// regis end

// Login and Logout
Route::get('/Login', [AuthController::class, 'Login']) -> name("Login");
Route::post('/Login', [AuthController::class, 'Loginpost']) -> name('Login.post');
Route::post('/Logout', [AuthController::class, 'Logout']) -> name('Logout');

// Login and Logou end

// admin page

Route::get('/AdminDashboard', [AdminController::class, 'Dashboard']) -> name('Dashboard.Admin')-> middleware('Admin');
Route::post('/Logoutadmin', [AuthController::class, 'Logout_admin']) -> name('Logout.Admin');
Route::get('/TambahMobil', [AdminController::class, 'AddMobil']) -> name('AddMobil.Admin');
Route::post('/TambahMobil', [AdminController::class, 'post_add']) -> name('post.addmobil');

Route::post('/Hapusmobil/{id}', [AdminController::class, 'Hapus']) -> name('hapus.add');
// admin page end
