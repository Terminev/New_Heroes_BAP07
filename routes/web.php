<?php

use App\Actions\Fortify\CreateNewCompany;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\MentionsLegalController;
use App\Http\Controllers\Announcement_companies_controller;
use App\Http\Controllers\FavoriteController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/mentions_legal', [MentionsLegalController::class,"index"])->name('MentionLegale');

Route::get('/faq', [FaqController::class,"index"])->name('FAQ');
Route::get('/annonce', [Announcement_companies_controller::class,'index'])->name('annonce_compagnie.index');
Route::post('/annonce', [Announcement_companies_controller::class,'store'])->name('annonce_compagnie.store');
Route::post('/annonce', [FavoriteController::class,'store'])->name('favorite.store');

Route::get('/annonce/create', [Announcement_companies_controller::class,'create'])->name('annonce_compagnie.create');

Route::get('/annonce/{id}', [Announcement_companies_controller::class,'show'])->name('annonce_compagnie.show');

Route::get('/profil', [ProfilController::class,"index"])->name('Profil');
