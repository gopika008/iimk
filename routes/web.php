<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FacultyController;

// LOGIN
Route::get('/auth/google', [GoogleController::class, 'redirect'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'callback']);
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
//Route::get('/auth/logout', [App\Http\Controllers\Auth\GoogleController::class, 'logout']);
// LOGIN END

Route::get('/', [HomeController::class, 'index']);
Route::get('/faculty/{id}', [HomeController::class, 'faculty_profile'])
    ->name('faculty.show');
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'hi'])) {
        session(['locale' => $locale]);
    }
    return back();
});
Route::get('rankings', [HomeController::class, 'accreditation'])->name('rankings.index');
Route::get('/deans', [HomeController::class, 'dean'])->name('about.dean');


//ABOUT MENU START
Route::view('/about', 'pages.about.index')->name('about.index');
Route::view('/about/director', 'pages.about.director')->name('about.director');
Route::view('/about/board-of-governors', 'pages.about.board-of-governors')->name('about.bog');
Route::view('/about/deans', 'page.about.deans')->name('about.deans');
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

//Academic Programmes
Route::view('/academic-programmes/doctoral-programmes', 'pages.academic-programmes.doctoral-programmes.index')
    ->name('academic-programmes.doctoral-programmes.index');

Route::view('/academic-programmes/doctoral-programmes/areas-of-specialization', 'pages.academic-programmes.doctoral-programmes.areas-of-specialization')
    ->name('academic-programmes.doctoral-programmes.areas-of-specialization');

Route::view('/academic-programmes/doctoral-programmes/vision-and-goals', 'pages.academic-programmes.doctoral-programmes.vision-and-goals')
    ->name('academic-programmes.doctoral-programmes.vision-and-goals');

Route::view('/academic-programmes/doctoral-programmes/structure-and-coursework', 'pages.academic-programmes.doctoral-programmes.structure-and-coursework')
    ->name('academic-programmes.doctoral-programmes.structure-and-coursework');

Route::view('/academic-programmes/doctoral-programmes/fellowship-and-fee-structure', 'pages.academic-programmes.doctoral-programmes.fellowship-and-fee-structure')
    ->name('academic-programmes.doctoral-programmes.fellowship-and-fee-structure');

Route::view('/academic-programmes/doctoral-programmes/admission', 'pages.academic-programmes.doctoral-programmes.admission')
    ->name('academic-programmes.doctoral-programmes.admission');

Route::view('/academic-programmes/doctoral-programmes/student-thesis-dpm', 'pages.academic-programmes.doctoral-programmes.student-thesis-dpm')
    ->name('academic-programmes.doctoral-programmes.student-thesis-dpm');

Route::view('/academic-programmes/doctoral-programmes/testimonials', 'pages.academic-programmes.doctoral-programmes.testimonials')
    ->name('academic-programmes.doctoral-programmes.testimonials');

Route::view('/academic-programmes/doctoral-programmes/student-directory/dpm', 'pages.academic-programmes.doctoral-programmes.student-directory-dpm')
    ->name('academic-programmes.doctoral-programmes.student-directory-dpm');

Route::view('/academic-programmes/doctoral-programmes/student-directory/dpm-practice-track', 'pages.academic-programmes.doctoral-programmes.student-directory-practice')
    ->name('academic-programmes.doctoral-programmes.student-directory-practice');

Route::view('/academic-programmes/doctoral-programmes/faq', 'pages.academic-programmes.doctoral-programmes.faq')
    ->name('academic-programmes.doctoral-programmes.faq');

Route::view('/academic-programmes/doctoral-programmes/contact-us', 'pages.academic-programmes.doctoral-programmes.contact-us')
    ->name('academic-programmes.doctoral-programmes.contact-us');

//dpm over

//pgp start
Route::view('/academic-programmes/pgp', 'pages.academic-programmes.pgp.index')
    ->name('academic-programmes.pgp.index');
Route::view('/academic-programmes/pgp/courses', 'pages.academic-programmes.pgp.courses')
    ->name('academic-programmes.pgp.courses');
//pgp end

//Academic Programmes