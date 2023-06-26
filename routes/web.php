<?php

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

Route::prefix('/report')->group(function () {

    Route::get('/years', function () {
        return view('report.years');
    });
    Route::get('/program', function () {
        return view('report.program');
    });
    Route::get('/sector', function () {
        return view('report.sector');
    });
    Route::get('/company', function () {
        return view('report.company');
    });

});

Route::prefix('/news')->group(function () {
    Route::get('/', function () {
        return view('news.news');
    });
    Route::get('/detail', function () {
        return view('news.detail');
    });
});

Route::prefix('/portofolio')->group(function () {
    Route::get('/', function () {
        return view('portofolio.portofolio');
    });
});

Route::get('/contact', function () {
    return view('contacts.contact');
});

Route::prefix('/profile')->group(function() {

    Route::get('/jepara', function() {
        return view('profiles.jepara');
    });
    Route::get('/moncer', function() {
        return view('profiles.moncer');
    });
    Route::get('/komite', function() {
        return view('profiles.komite');
    });
    Route::get('/regulation', function() {
        return view('profiles.regulasi');
    });

});
Route::prefix('/information')->group(function() {

    Route::get('/csr-about', function() {
        return view('informations.about');
    });
    Route::get('/csr-news', function() {
        return view('informations.news');
    });
    Route::get('/csr-news/details', function() {
        return view('informations.news-details');
    });
});
Route::prefix('/gallery')->group(function() {

    Route::get('/csr-gallery', function() {
        return view('galleries.csr');
    });
    Route::get('/committee-gallery', function() {
        return view('galleries.committee');
    });
    Route::get('/csr-gallery/details', function() {
        return view('galleries.csr-details');
    });
    Route::get('/committee-gallery/details', function() {
        return view('galleries.committee-details');
    });
});