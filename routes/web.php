<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [HomePageController::class, 'index'])->name('homepage');

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

// for users
Route::group(['middleware' => ['auth', 'role:student']], function() { 
    Route::get('/dashboard/student', [DashboardController::class, 'studentDashboard'])->name('dashboard.studentDashboard');
});

// for blogwriters
Route::group(['middleware' => ['auth', 'role:lecturer']], function() { 
    Route::get('/dashboard/lecturer', [DashboardController::class, 'lecturerDashboard'])->name('dashboard.lecturerDashboard');
});

require __DIR__.'/auth.php';
