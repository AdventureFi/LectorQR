<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/persona-qr',[Controller::class,'welcome'])->name('welcome');

Route::get('/persona-qr/{persona:id_persona}', [Controller::class,'personabyqr'])->name('personabyqr');
