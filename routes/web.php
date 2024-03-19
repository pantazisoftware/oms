<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrdersController; // Add this line
use App\Http\Controllers\NotesController; // Add this line
use App\Http\Controllers\AnalyticsController; // Add this line
use App\Models\Order;
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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/orders', [OrdersController::class, 'index'])->name('orders.all'); // Move this line here
    Route::get('/orders/today', [OrdersController::class, 'today'])->name('orders.today'); // Add this line
    Route::get('/orders/upcoming', [OrdersController::class, 'upcoming'])->name('orders.upcoming'); // Add this line
    Route::get('/orders/create', [OrdersController::class, 'create'])->name('orders.create'); // Add this line
    Route::get('/orders/edit/{id}', [OrdersController::class, 'edit'])->name('orders.edit'); // Add this line
    Route::post('/orders/store', [OrdersController::class, 'store'])->name('orders.store'); // Add this line
    Route::post('/notes/store', [NotesController::class, 'store'])->name('notes.store');
    Route::post('/orders/storePayment', [OrdersController::class, 'storePayment'])->name('orders.storePayments');
    Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics'); // Add this line
    Route::get('/', [AnalyticsController::class, 'dashboard'])->name('dashboard'); // Add this line

});

require __DIR__.'/auth.php';
