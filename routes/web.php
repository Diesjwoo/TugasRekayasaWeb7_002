<?php

use App\Http\Controllers\PerkuliahanC;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/daftarperkuliahan', [PerkuliahanC::class, 'index'])
    ->name('daftarperkuliahan');