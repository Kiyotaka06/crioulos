<?php

use App\Http\Controllers\LanguageCodeController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\UnsplashController;
use App\Livewire\CreoleHistory;
use App\Import;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/language_codes', [LanguageCodeController::class, 'index'])->name('language_codes.index');

Route::get('/references', [ReferenceController::class, 'index'])->name('references.index');

Route::get('/people', [PersonController::class, 'index'])->name('people.index');
Route::get('/people/create', [PersonController::class, 'create'])->name('people.create');


Route::get('/history', [HistoryController::class, 'index'])->name('history.index');

Route::get('/history/people/amilcar_cabral', function () {
    return view('history.people.amilcar_cabral');
})->name('history-people-amilcar');

Route::get('/creole-history/people/luis_romano', function () {
    return view('history.people.luis_romano');
})->name('history-people-luis');

Route::get('/unsplash', [UnsplashController::class, 'index'])->name('unsplash.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

