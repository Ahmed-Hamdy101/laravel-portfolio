<?php

use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\SkillController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\Backend\Home@index');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('/skills', SkillController::class);
    Route::resource('/projects', ProjectController::class);
});

require __DIR__ . '/auth.php';