<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'Home']) -> name('Home');

// user

Route::get('/Dashboard', [UserController::class, 'Home']) -> name('Dashboard') -> middleware('User');
Route::get('/Rental', [UserController::class, 'Rental']) -> name('Catalog.Rent') -> middleware('Laravel');
Route::get('/History', [UserController::class, 'History']) -> name('History') -> middleware('Laravel');
Route::get('/penyewaan/{id}' , [UserController::class, 'Penyewaan']) -> name('Sewa.mobil') -> middleware('Laravel');
Route::post('/penyewaan/{id}', [UserController::class, 'pembayaran']) -> name('pembayaran.mobil');
Route::get('/Invoicement/{id}', [UserController::class, 'Invoice']) -> name('Invoice.user') -> middleware('Laravel');

Route::get('/Topup/{id}' , [UserController::class, 'Topup']) -> name('Topup.user');
Route::post('/Topup/{id}' , [UserController::class, 'Topup_koin']) -> name('Topup.post');

Route::get('/HistoryPay', [UserController::class, 'History_pay']) -> name('History.pay') -> middleware('Laravel');
Route::post('/HistoryPay/{id}', [UserController::class, 'Historypay_post']) -> name('Historypay.post');


// user end


Route::get('/Coin', [UserController::class, 'Koin']) -> name('coin.user') -> middleware('Laravel');
// regis 
Route::get('/Register', [AuthController::class, 'Register']) -> name('register.user');
Route::post('/Register', [AuthController::class, 'Regispost']) -> name('Regis.post');
Route::get('/Detailsewa/{id}', [UserController::class, 'Detailsewa']) -> name('Detail.sewa') -> middleware('Laravel');
Route::post('/Detailsewa/{id}', [UserController::class, 'Detailsewa_post']) -> name('Detail.post');
// regis end

// Login and Logout
Route::get('/Login', [AuthController::class, 'Login']) -> name("Login");
Route::post('/Login', [AuthController::class, 'Loginpost']) -> name('Login.post');
Route::post('/Logout', [AuthController::class, 'Logout']) -> name('Logout');

// Login and Logou end

// admin page

Route::get('/AdminDashboard', [AdminController::class, 'Dashboard']) -> name('Dashboard.Admin')-> middleware('Admin');
Route::post('/Logoutadmin', [AuthController::class, 'Logout_admin']) -> name('Logout.Admin');
Route::get('/TambahMobil', [AdminController::class, 'AddMobil']) -> name('AddMobil.Admin') -> middleware('Admin');
Route::post('/TambahMobil', [AdminController::class, 'post_add']) -> name('post.addmobil');

Route::post('/Hapusmobil/{id}', [AdminController::class, 'Hapus']) -> name('hapus.add');

Route::get('/editCar/{id}', [AdminController::class, 'edit_admin']) -> name('edit.admin');
Route::post('/editCar/{id}', [AdminController::class, 'edit_post']) -> name('editpost.admin');

Route::get('/Inputpoint', [AdminController::class, 'TopUp_admin']) -> name('Topup_admin');
Route::post('/Inputpoint', [AdminController::class, 'Pointadmin']) -> name('Point_post');

Route::post('/deletePoint/{id}', [AdminController::class, 'Delete_Point']) -> name('Deletepoint_admin');

// admin page end
