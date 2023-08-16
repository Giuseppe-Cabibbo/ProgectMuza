<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PubblicController;
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

Route::get('/', [PubblicController::class, 'home'])->name('homepage');

Route::get('/form/create', [FormController::class, 'create'])->name('form.create');

