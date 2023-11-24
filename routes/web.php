<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashbord\RoomsController;
use App\Http\Controllers\Dashbord\ServicesController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// ##############################start Room Routes#######################################
Route::get('create/room',[RoomsController::class, 'create'])->name('create.room');
Route::post('store/room',[RoomsController::class,'store'])->name('store.room');
Route::get('show/room',[RoomsController::class,'show'])->name('show.room');
Route::post('delete/room/{Room_id}',[RoomsController::class,'delete'])->name('delete.room');
Route::get('edit/room/{Room_id}',[RoomsController::class,'edit'])->name('edit.room');
Route::post('update/room/{id}',[RoomsController::class,'update'])->name('update.room');
// #########################  end Room Routes      #################################

// #########################     start services Routes           #######################################
Route::get('create/services',[ServicesController::class, 'create'])->name('create.services');
Route::post('store/services',[ServicesController::class,'store'])->name('store.services');
Route::get('show/room',[ServicesController::class,'show'])->name('show.services');
Route::post('delete/services/{services_id}',[ServicesController::class,'delete'])->name('delete.services');
Route::get('edit/services/{services_id}',[ServicesController::class,'edit'])->name('edit.services');
Route::post('update/services/{id}',[ServicesController::class,'update'])->name('update.services');
// ############################  end services Routes   #######################################
require __DIR__.'/auth.php';
