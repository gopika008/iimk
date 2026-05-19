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

//ABOUT MENU START
Route::view('/about', 'pages.about.index')->name('about.index');
Route::view('/about/director', 'pages.about.director')->name('about.director');
Route::view('/about/board-of-governors', 'pages.about.board-of-governors')->name('about.bog');
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
Route::view('/about/green-initiatives', 'pages.about.green-initiatives')
    ->name('about.green-initiatives');
Route::view('/about/accreditation', 'pages.about.accreditation')
    ->name('about.accreditation');
//ABOUT MENU END

//IR MENU START
Route::view('/international-relations', 'pages.international-relations.about')
    ->name('international-relations.about');
Route::view('/international-relations/admissions/programs-offered', 'pages.international-relations.admissions.programs-offered')
    ->name('international-relations.admissions.programs-offered');
Route::view('/international-relations/admissions/eligibility', 'pages.international-relations.admissions.eligibility')
    ->name('international-relations.admissions.eligibility');
Route::view('/international-relations/admissions/programme-fees', 'pages.international-relations.admissions.programme-fees')
    ->name('international-relations.admissions.programme-fees');
Route::view('/international-relations/admissions/selection-process', 'pages.international-relations.admissions.selection-process')
    ->name('international-relations.admissions.selection-process');
Route::view('/international-relations/admissions/courses-offered', 'pages.international-relations.admissions.courses-offered')
    ->name('international-relations.admissions.courses-offered');
Route::view('/international-relations/admissions/scholarships', 'pages.international-relations.admissions.scholarships')
    ->name('international-relations.admissions.scholarships');
Route::view('/international-relations/admissions/apply-online', 'pages.international-relations.admissions.apply-online')
    ->name('international-relations.admissions.apply-online');

Route::view('/international-relations/student-exchange/incoming', 'pages.international-relations.student-exchange.incoming')
    ->name('international-relations.student-exchange.incoming');
Route::view('/international-relations/student-exchange/outgoing', 'pages.international-relations.student-exchange.outgoing')
    ->name('international-relations.student-exchange.outgoing');
Route::view('/international-relations/student-exchange/partner-institutions', 'pages.international-relations.student-exchange.partner-institutions')
    ->name('international-relations.student-exchange.partner-institutions');
Route::view('/international-relations/student-exchange/events', 'pages.international-relations.student-exchange.events')
    ->name('international-relations.student-exchange.events');
//IR MENU END