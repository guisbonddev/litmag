<?php

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

/*
Homepage / Main Website Routes
*/

// 404 Error Page
Route::get('/404', function () {
    return view('404');
});

// Feature page route
Route::get('/feature', function () {
    return view('feature');
});

// Magazine Homepage
Route::get('/', 'HomeController@home');

// Submissions Hompeage
// Route::get('/submit', 'SubmissionController@submit');

// Submissions GF Reroute
Route::get('/submit', function () {
    return redirect('https://docs.google.com/forms/d/e/1FAIpQLScib5cok-dlQnKw7AYnZlIFyTXoJhK8cvptgmqXhZDbyNC9Lg/viewform');
});

// Contact form show
Route::get('/contact', function () {
    return view('contact');
});

/*
Route::post('/conpost', 'HomeController@contact');
*/

// Submissions Form-go route
Route::get('/submit/store', 'SubmissionController@store');

// About Page view route
Route::get('/about', 'HomeController@about');

/*
Library Routes
*/

// Initial library page; route to show editions
Route::get('/library', 'LibraryController@editions');

Route::get('/library/oldarch', function () {
    return view('library.oldarch');
});

// Library page that shows genres of an issue they clicked on
Route::get('/library/{edition_id}', 'LibraryController@genres');

// Library page for artwork -- shows display based on edition
Route::get('/library/{edition_id}/artwork', 'LibraryController@artwork');

// Library page that shows pieces for a specific genre
Route::get('/library/{edition_id}/{genre_id}', 'LibraryController@pieces');

// Library page that shows actual text of a piece for a genre
Route::get('/library/{edition_id}/{genre_id}/{piece_id}', 'LibraryController@piece');

/*
Other System Routes
*/

// Voyager route admin prefix
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

