<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MinutesDataController;
use App\Http\Controllers\PageDataController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::group(['middleware' => ['auth', 'verified']], function () {

Route::get('/minutes', [PageDataController::class,'minutes'])->name('minutes');

Route::get('/reservation', [PageDataController::class,'reservation'])->name('reservation');
Route::get('/checklist', [PageDataController::class,'checklist'])->name('checklist');

Route::get('/calendar', [PageDataController::class,'calendar'])->name('calendar');


});
