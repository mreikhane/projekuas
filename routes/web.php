<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PerhitunganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('about', function () {
//     return view('about');
// });

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(KriteriaController::class)->prefix('kriterias')->group(function () {
        Route::get('', 'index')->name('kriterias.index');
        Route::get('create', 'create')->name('kriterias.create');
        Route::post('store', 'store')->name('kriterias.store');
        Route::get('show/{id}', 'show')->name('kriterias.show');
        Route::get('edit/{id}', 'edit')->name('kriterias.edit');
        Route::put('edit/{id}', 'update')->name('kriterias.update');
        Route::delete('destroy/{id}', 'destroy')->name('kriterias.destroy');
    });

    Route::controller(AlternatifController::class)->prefix('alternatifs')->group(function () {
        Route::get('', 'index')->name('alternatifs.index');
        Route::get('create', 'create')->name('alternatifs.create');
        Route::post('store', 'store')->name('alternatifs.store');
        Route::get('show/{id}', 'show')->name('alternatifs.show');
        Route::get('edit/{id}', 'edit')->name('alternatifs.edit');
        Route::put('edit/{id}', 'update')->name('alternatifs.update');
        Route::delete('destroy/{id}', 'destroy')->name('alternatifs.destroy');
    });


        // Route untuk Perhitungan
        Route::get('/perhitungan', [PerhitunganController::class, 'perhitungan'])->name('perhitungan');
        Route::get('/vektor', [PerhitunganController::class, 'vektor'])->name('vektor');
        Route::get('/perangkingan', [PerhitunganController::class, 'perangkingan'])->name('perangkingan');

    

    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
});
