<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StireController;

// Automatically adds routes for login, register, forgot password, etc.
require __DIR__.'/auth.php';

// user login dashboard
Route::get('/dashboard', function () {
    return view('dashboard');  // Point to the dashboard view
})->name('dashboard')->middleware(['auth']);  // Middleware ensures only authenticated users can access the route

//Route::resource('Stire', StireController::class);
//Route::get('/Stire', [StireController::class, 'index'])
//    ->middleware('permission:view_data')
//    ->name('Stire.index');

//Route::get('/Stire', [StireController::class, 'index'])->name('Stire.index');
//Route::group(['middleware' => ['auth']], function () { 
//    Route::get('/Stire', [StireController::class, 'index'])->name('Stire.index');
//});

/*Route::group(['middleware' => ['auth', 'permission:view_data']], function () {
    Route::get('/Stire', [StireController::class, 'index'])->name('Stire.index');
    // You can add more routes here that also require 'auth' and 'permission:view_data'
});*/

// Only users with 'edit record' permission can access the Stire edit page
//Route::get('/Stire/{id}/edit', [StireController::class, 'edit'])
//    ->middleware('permission:edit record')
//    ->name('Stire.edit');
//Route::get('/Stire', [StireController::class, 'index'])->name('Stire.index'); //->name('Stire.index')); //->name('stiri.index') added
/*Route::get('/', function () {
    return view('welcome');
});*/

//use App\Http\Controllers\Stiri00Controller;

//Route::get('/stiri', [Stiri00Controller::class, 'index'])->name('stiri.index');
/*Route::get('/Stire/create', [StireController::class, 'create'])->name('Stire.create');
Route::post('/Stire', [StireController::class, 'store'])->name('Stire.store');
Route::get('/Stire/{id}', [StireController::class, 'show'])->name('Stire.show');
Route::get('/Stire/{id}/edit', [StireController::class, 'edit'])->name('Stire.edit');
Route::put('/Stire/{id}', [StireController::class, 'update'])->name('Stire.update');
Route::delete('/Stire/{id}', [StireController::class, 'destroy'])->name('Stire.destroy');*/

Route::get('your-route', [StireController::class, 'yourMethod'])
    ->middleware('check.something');

Route::get('tst-check', [StireController::class, 'yourMethod'])->middleware('check.new');

Route::get('test-check', [StireController::class, 'yourMethod'])->middleware(CheckSomethingNew::class);
/*Route::get('test-check', function () {
        return 'Middleware test successful';
    })->middleware(function ($request, $next) {
        \Log::info('Test middleware executed');
        return $next($request);
    });*/

/*Route::get('test-check', function () {
        return 'Middleware test successful';
    })->middleware(function ($request, $next) {
        \Log::info('Test middleware executed');
        return $next($request);
    }); 

Route::get('test-check', function () {
        \Log::info('Closure middleware test executed');
        return 'Middleware test successful';
    })->middleware(function ($request, $next) {
        \Log::info('Inside the middleware closure');
        return $next($request);
    });*/

Route::group(['middleware' => ['auth', 'permission:view_data']], function () {
    Route::get('/Stire', [StireController::class, 'index'])->name('Stire.index');
    Route::get('/Stire/create', [StireController::class, 'create'])->name('Stire.create');
    Route::post('/Stire', [StireController::class, 'store'])->name('Stire.store');
    Route::get('/Stire/{id}', [StireController::class, 'show'])->name('Stire.show'); // This route must be here
    Route::get('/Stire/{id}/edit', [StireController::class, 'edit'])->name('Stire.edit');
    Route::put('/Stire/{id}', [StireController::class, 'update'])->name('Stire.update');
    Route::delete('/Stire/{id}', [StireController::class, 'destroy'])->name('Stire.destroy');
});