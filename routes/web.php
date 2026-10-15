<?php

use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('materias.index');
});

Route::resource('materias', MateriaController::class);