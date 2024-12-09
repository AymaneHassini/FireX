<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlertController;
use Illuminate\Support\Facades\Cache;

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
Route::get('/alert-counts', function () {
    $fire_alerts = Cache::get('fire_alerts', 0);
    $smoke_alerts = Cache::get('smoke_alerts', 0);
    $total_alerts = $fire_alerts + $smoke_alerts;

    return response()->json([
        'fire_alerts' => $fire_alerts,
        'smoke_alerts' => $smoke_alerts,
        'number_of_alerts' => $total_alerts,
    ]);
});
Route::post('/reset-alerts', function () {
    Cache::put('fire_alerts', 0);
    Cache::put('smoke_alerts', 0);
    return response()->json(['message' => 'Alerts reset successfully']);
});


Route::post('/increment-alerts', function (\Illuminate\Http\Request $request) {
    // Increment fire alerts
    $fire_count = $request->input('fire_count', 0);
    Cache::increment('fire_alerts', $fire_count);

    // Increment smoke alerts
    $smoke_count = $request->input('smoke_count', 0);
    Cache::increment('smoke_alerts', $smoke_count);

    // Total alerts
    $total_alerts = Cache::get('fire_alerts', 0) + Cache::get('smoke_alerts', 0);

    return response()->json([
        'message' => 'Alerts incremented successfully!',
        'fire_alerts' => Cache::get('fire_alerts', 0),
        'smoke_alerts' => Cache::get('smoke_alerts', 0),
        'number_of_alerts' => $total_alerts,
    ]);
});
Route::get('/', function () {
    return view('landing_page');
});

Route::get('/dashboard', function () {
    return view('admin_dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/live-feeds', function () {
    return view('live_feed');
})->name('live.feeds');
Route::get('/maps', function () {
    return view('map');
})->name('map');
require __DIR__.'/auth.php';
