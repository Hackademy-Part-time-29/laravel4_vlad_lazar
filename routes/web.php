<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageCon;
use App\Http\Controllers\DettagliCon;
use App\Http\Controllers\ArticoliCon;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage',[HomepageCon::class,'homepage'])->name('homepage');
Route::get('/dettagli',[DettagliCon::class,'dettagli'])->name('dettagli');
Route::get('/articoli',[ArticoliCon::class,'articoli'])->name('articoli');
Route::get('/articolo/id={id}',[ArticoliCon::class,'articoloShow'])->name('articolo');
