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

Route::view('/about', 'pages.about.index')->name('about.index');
Route::view('/about/director', 'pages.about.director')->name('about.director');
Route::view('/about/board-of-governors', 'pages.about.board-of-governors')->name('about.bog');
Route::view('/about/deans', 'pages.about.deans')->name('about.deans');

Route::view('/about/rti/organization-and-function', 'pages.about.rti.organization-and-function')
    ->name('about.rti.organization-and-function');
Route::view('/about/rti/budget-and-programmes', 'pages.about.rti.budget-and-programmes')
    ->name('about.rti.budget-and-programmes');
Route::view('/about/rti/publicity-and-public-interface', 'pages.about.rti.publicity-and-public-interface')
    ->name('about.rti.publicity-and-public-interface');
Route::view('/about/rti/e-governance', 'pages.about.rti.e-governance')
    ->name('about.rti.e-governance');
Route::view('/about/rti/information-as-may-be-prescribed', 'pages.about.rti.information-as-may-be-prescribed')
    ->name('about.rti.information-as-may-be-prescribed');
Route::view('/about/rti/information-disclosed-on-own-initiative', 'pages.about.rti.information-disclosed-on-own-initiative')
    ->name('about.rti.information-disclosed-on-own-initiative');