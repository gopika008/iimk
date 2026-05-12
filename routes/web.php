<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FacultyController;


Route::get('/auth/google', [GoogleController::class, 'redirect'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'callback']);
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
//Route::get('/auth/logout', [App\Http\Controllers\Auth\GoogleController::class, 'logout']);
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/faculty/{id}', [HomeController::class, 'faculty_profile'])
    ->name('faculty.show');
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'hi'])) {
        session(['locale' => $locale]);
    }
    return back();
});
Route::get('/admins', function () {
    return view('admin.dashboard');
});
Route::get('/deans', [HomeController::class, 'dean'])->name('deans.index');
Route::get('/rankings', [HomeController::class, 'rankings'])->name('rankings.index');