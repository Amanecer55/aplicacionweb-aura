<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empleadoscontroller;

Route::get('inicio',[empleadoscontroller::class,'inicio'])->name('inicio');

Route::get('reporteempleados',[empleadoscontroller::class,'reporteempleados'])->name('reporteempleados');


Route::get('altaempleado',[empleadoscontroller::class,'altaempleado'])->name('altaempleado');
Route::post('guardaempleado',[empleadoscontroller::class,'guardaempleado'])->name('guardaempleado');
