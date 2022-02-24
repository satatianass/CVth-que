<?php

use App\Http\Controllers\CvController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('cvs', [CvController::class, 'index']);
// Route::get('cvs/create', [CvController::class, 'create']);
// Route::post('cvs', [CvController::class, 'store']);
// Route::get('cvs/{id}/edit', [CvController::class, 'edit']);
// Route::put('cvs/{id}', [CvController::class, 'update']);

Route::resource('cvs', CvController::class );

Route::get('/getexperiences', [CvController::class, 'getexperiences']);

Auth::routes();

Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
