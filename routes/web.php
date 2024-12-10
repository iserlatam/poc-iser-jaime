<?php

use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
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
Route::get('pdf', function () {
    return view('utils.prevPdf');
});

Route::get('prev-pdf', function () {
    $pdf = FacadePdf::loadView('utils.stablePdf');
    return $pdf
            ->stream();
});
