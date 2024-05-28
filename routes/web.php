<?php

use App\Http\Controllers\LanguageCodeController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\UnsplashController;
use App\Http\Controllers\LexiconController;
use App\Models\Word;
use App\Livewire\CreoleHistory;
use App\Import;
use Illuminate\Support\Facades\Route;

// Welcome
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Language Codes
Route::get('/language_codes', [LanguageCodeController::class, 'index'])->name('language_codes.index');

// References
Route::get('/references', [ReferenceController::class, 'index'])->name('references.index');

// People
Route::get('/people', [PersonController::class, 'index'])->name('people.index');
Route::get('/people/create', [PersonController::class, 'create'])->name('people.create');

// History
Route::get('/history', [HistoryController::class, 'index'])->name('history.index');

Route::get('/history/people/amilcar_cabral', function () {
    return view('history.people.amilcar_cabral');
})->name('history-people-amilcar');

Route::get('/creole-history/people/luis_romano', function () {
    return view('history.people.luis_romano');
})->name('history-people-luis');

// Unsplash
Route::get('/unsplash', [UnsplashController::class, 'index'])->name('unsplash.index');

// Lexicon
Route::get('/lexicon/create', [LexiconController::class, 'create'])->name('lexicon.create');

// Words
Route::get('/words', function () {
    $words = Word::with('languageCode')->paginate(100);
    return view('words.index', compact(['words']));
})->name('words');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

