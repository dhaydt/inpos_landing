<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/feature', [Controller::class, 'feature'])->name('feature');
Route::get('/hardware', [Controller::class, 'hardware'])->name('hardware');
Route::get('/price', [Controller::class, 'price'])->name('price');
Route::get('/panduan', [Controller::class, 'panduan'])->name('panduan');
Route::get('/faq', [Controller::class, 'faq'])->name('faq');
Route::get('/kebijakan_privasi', [Controller::class, 'kebijakan_privasi'])->name('kebijakan_privasi');
Route::get('/syarat_ketentuan', [Controller::class, 'syarat_ketentuan'])->name('syarat_ketentuan');
Route::get('/paket_basic', [Controller::class, 'paket_basic'])->name('paket_basic');
