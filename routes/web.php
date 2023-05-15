<?php

use App\Http\Controllers\EditableController;
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
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/register', [EditableController::class, 'reg'])->name('reg');
Route::post('/register/conf', [EditableController::class, 'regconf'])->name('regconf');
Route::post('/login/conf', [EditableController::class, 'logconf'])->name('logconf');
Route::get('/logout/conf', [EditableController::class, 'logout'])->name('logout');
// Route::middleware('auth')->group(function () {
//     Route::get('/cv1', [EditableController::class, 'cv1'])->name('cv1');
// });
Route::group(['middleware' => 'auth'], function () {
    Route::get('/cv1', [EditableController::class, 'cv1'])->name('cv1');
    Route::post('/cv1/submit', [EditableController::class, 'cv1submit'])->name('cv1submit');
    Route::get('/cv1/view/{user}', [EditableController::class, 'cv1view'])->name('cv1view');
    Route::get('/cv1/down/{user}', [EditableController::class, 'cv1download'])->name('cv1download');
});
