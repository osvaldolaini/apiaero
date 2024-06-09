<?php

use App\Livewire\Admin\Aircraft;
use App\Livewire\Admin\Airfield;
use App\Livewire\Admin\Dashboard;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'adminAccess',
    'registerLogging'
])->group(function () {
    Route::get('/dashboard',Dashboard::class)->name('dashboard');
    // Route::get('/painel-de-controle-administrador',Dashboard::class)->name('dashboard');
});
    Route::get('/listar-aerodromos',Airfield::class)->name('airfields');
    Route::get('/listar-aeronaves',Aircraft::class)->name('aircrafts');

