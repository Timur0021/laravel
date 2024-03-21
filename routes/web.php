<?php

use App\Http\Controllers\Zoo\AnimalController;
use App\Http\Controllers\Zoo\EmployeesController;
use App\Http\Controllers\Zoo\FoodController;
use App\Http\Controllers\Zoo\ZooController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/zoo', [ZooController::class, 'index'])->name('zoo');
Route::get('/animal', [AnimalController::class, 'index'])->name('animal');
Route::get('/employees', [EmployeesController::class, 'index'])->name('employees');
Route::get('/food', [FoodController::class, 'index'])->name('food');
