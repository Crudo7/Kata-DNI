<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KataDniController;

Route::get('/assign/{id}',[KataDniController::class, 'assignLetterToNumber'])->name('apiassign');