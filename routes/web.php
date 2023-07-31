<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Member\MemberController;
use App\Http\Controllers\Member\AssignmentController;
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
    return view('welcome',[ "tittle" => 'Beranda']);
});
//Route Member
Route::middleware(['auth','checkRole:member'])->group(function (){
    Route::get('/dashboard', [MemberController::class, 'showDashboard']);
    //Menu Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile/update-foto', [ProfileController::class, 'updateFoto'])->name('profile.update-foto');

<<<<<<< HEAD
Route::get('/comingsoon', function () {
    return view('comingsoon',[ "tittle" => 'ComingSoon']);
});


//Route Member
Route::middleware(['auth','checkRole:member'])->group(function (){
    Route::get('/dashboard', [MemberController::class, 'showDashboard']);
    //Menu Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile/update-foto', [ProfileController::class, 'updateFoto'])->name('profile.update-foto');

=======
>>>>>>> a7ef656493eef8f4b3641dc5cd2f94eb0a2a6e0e
    Route::get('/penugasan', [AssignmentController::class, 'showPenugasan']);
    Route::get('/buku-panduan', [Controller::class, 'showBukuPanduan']);
    Route::get('/pengenalan-ukm', [Controller::class, 'showPengenalanUKM']);
    Route::get('/sertifikat', [Controller::class, 'showSertifikat']);
});
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
