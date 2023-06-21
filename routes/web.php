<?php

use App\Http\Controllers\BuildController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Laravel\Ui\Presets\React;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', [App\Http\Controllers\BuildController::class, 'index']);
//Route::get('/create', [App\Http\Controllers\BuildController::class, 'create']);
//Route::post('/', [App\Http\Controllers\BuildController::class, 'store']);
//Route::get('/id', [App\Http\Controllers\BuildController::class, 'show']);
//Route::get('/id/edit', [App\Http\Controllers\BuildController::class, 'edit']);
//Route::put('/id', [App\Http\Controllers\BuildController::class, 'update']);
//Route::delete('/id', [App\Http\Controllers\BuildController::class, 'destroy']);


//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/g', [App\Http\Controllers\BuildController::class, 'index']);

Route::resource('posts', BuildController::class);

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
