<?php

use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ChapitreController;
// use App\Http\Controllers\Admin\UserController;

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
    $recentEvent = Event::orderBy('created_at', 'desc')->limit(3)->get();
    return view('welcome', compact('recentEvent'));
});

Auth::routes();



Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->middleware('can:administration')->group(function() {
    Route::resource('user', UserController::class);
});

Route::namespace('App\Http\Controllers')->prefix('creator')->name('createur.')->middleware('can:creator_access')->group(function(){
    Route::resource('cour', CourController::class);
    Route::get('chapitre/create/{cour}', [ChapitreController::class, 'create'])->name('chapitre.add');
    Route::post('chapitre/create/{id}', [ChapitreController::class, 'store'])->name('chapitre.save');
    Route::resource('chapitre', ChapitreController::class);
});

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('mycours', [CourController::class, 'getCours'])->name('mycours');
    Route::get('chapitres/{id_cour}', [ChapitreController::class, 'chapitres'])->name('chapitres');
    Route::resource('event', EventController::class);
});