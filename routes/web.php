<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/ifsc/{id}', [HomeController::class, 'ifsc'])->name('ifsc');

Route::get('/result/ifsccode', [HomeController::class, 'ifscsearch'])->name('ifscsearch');
Route::get('/result/pincode', [HomeController::class, 'pinsearch'])->name('pinsearch');
