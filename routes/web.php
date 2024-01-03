<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VisitorController;

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

Route::get('/', [VisitorController::class, 'index'])->name('HPage');

Auth::routes();

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contactform', [VisitorController::class, 'contactShow'])->name('contact.form');
Route::post('/contactform/send', [ContactController::class, 'store'])->name('contact.store');

Route::get('/plans', [PlanController::class, 'index'])->name('plans.show');
Route::get('/plans/create', [PlanController::class, 'create'])->name('plans.create');
Route::post('/plans/store', [PlanController::class, 'store'])->name('plans.store');
Route::get('/plans/{id}', [PlanController::class, 'destroy'])->name('plans.delete');
Route::get('/plans/edit/{id}', [PlanController::class, 'edit'])->name('plans.edit');
Route::post('/plans/update', [PlanController::class, 'update'])->name('plans.update');
Route::post('/plans/select', [PlanController::class, 'choosePlan'])->name('plans.select');

Route::get('/users', [UserController::class, 'index'])->name('users.show');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.show');
Route::get('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.delete');
Route::get('/contacts/edit/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
Route::post('/contacts/update', [ContactController::class, 'update'])->name('contacts.update');
