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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
    return view('inc.header');
});

// admin dashboard
Route::get('/adminn', function () {
    return view('admin.index');
})->name("admin");

//admin group routes
Route::prefix('/adminn')
    ->name('adminn.')
    ->group(
        function () {

            Route::resource('packagetype', 'PackageTypeController');
            Route::resource('indipackage', 'IndividualPackageController');
            Route::resource('aboutTour', 'AboutTourController');
            Route::resource('photo-gallery', 'PhotoGalleryController');
            Route::resource('trip-info', 'AboutTheTripInformationController');
            Route::resource('itinerary', 'ItineraryController');
            Route::resource('hotels', 'HotelsController');
            Route::resource('hotel-features', 'HotelSpecialFeaturesController');
        }
    );

// test
Route::get("/individualPkg/{id}", 'PagesController@showIndividualPackage');

Route::get('/packageType/{id}', 'PagesController@showPackageType');

// booking by email for admin section
Route::get('adminn/booking-by-email', 'BookingByEmailController@create')->name('adminBookingByEmail');

// delete booking by email field
Route::get("/adminn/deleteBookingByEmail/{id}", 'BookingByEmailController@destroy');

// front end part(homepage part)
Route::get('/family-package', function () {
    return view('family-package');
})->name('home');

// booking
Route::get('/booking', 'BookingByEmailController@index')->name('booking');

// tour details
Route::get('/tour-details', function () {
    return view('tour-details');
});

// store the booking information
Route::post('/booking', 'BookingByEmailController@store');

// search result
Route::post('/search-result', 'SearchController@index');

// packages handler

// rating test
Route::get('/rating', 'RatingController@index');
