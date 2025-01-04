<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContractController;

Route::view('/', 'home');

Route::get('/contracts', [ContractController::class, 'index'])->name('contracts.index');

Route::get('/contracts/create', [ContractController::class, 'create'])->name('contracts.create');

Route::post('/contracts/store', [ContractController::class, 'store'])->name('contracts.store');

Route::get('/contracts/{contract}', [ContractController::class, 'show'])->name('contracts.show');