<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;


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
    return view('welcome',[
        "tittle" => 'Beranda'
    ]);
});

Route::get('/maskot', function () {
    return view('maskot',[
        "tittle" => 'Maskot'
    ]);
});

Route::get('/peta', function () {
    return view('peta',[
        "tittle" => 'Peta'
    ]);
});

Route::get('/merchandise', function () {
    return view('merchandise',[
        "tittle" => 'Merchandise'
    ]);
});

// Route::get('/edit-profile', function () {
//     return view('user/profile',[
//         "tittle" => 'Edit Profile'
//     ]);
// });

// Route::get('/dashboard', function () {
//     return view('user/dashboard',[
//         "tittle" => 'Dashboard'
//     ]);
// });

// Route::get('/penugasan', function () {
//     return view('user/penugasan',[
//         "tittle" => 'Penugasan'
//     ]);
// });

// Route::get('/buku-panduan', function () {
//     return view('user/panduan',[
//         "tittle" => 'Buku Panduan'
//     ]);
// });

// Route::get('/pengenalan-ukm', function () {
//     return view('user/ukm',[
//         "tittle" => 'Pengenalan UKM'
//     ]);
// });

// Route::get('/sertifikat', function () {
//     return view('user/sertifikat',[
//         "tittle" => 'Sertifikat'
//     ]);
// });


Route::get('/edit-profile', [Controller::class, 'showProfile']);
Route::get('/dashboard', [Controller::class, 'showDashboard']);
Route::get('/penugasan', [Controller::class, 'showPenugasan']);
Route::get('/buku-panduan', [Controller::class, 'showBukuPanduan']);
Route::get('/pengenalan-ukm', [Controller::class, 'showPengenalanUKM']);
Route::get('/sertifikat', [Controller::class, 'showSertifikat']);

