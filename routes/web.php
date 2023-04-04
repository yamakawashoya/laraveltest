<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('contact', [ContactController::class, 'showForm'])->name('contact.showForm');
Route::post('contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('contact/thanks', [ContactController::class, 'send'])->name('contact.send');
Route::post('contact/fix', [ContactController::class, 'fix'])->name('contact.fix');
Route::get('contact/thanks', [ContactController::class, 'thanks'])->name('contact.thanks');