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

// frontend routes
Route::prefix('/')
    ->namespace('FrontEnd')
    ->name('frontend.')
    ->group(
        function () {
            Route::get(
                '/',
                'PageController@home'
            )->name('home');

            Route::get(
                '/packages',
                'PageController@packages'
            )->name('packages');

            Route::get(
                '/package/{id}',
                'PageController@ipackages'
            )->name('single-pkg');

            // tour details
            Route::get(
                '/tour-details/{id}',
                'PageController@tour_details'
            );

            Route::get(
                'hotels',
                'PageController@hotels'
            )->name('hotels');

            Route::get(
                'hotel/{id}',
                'PageController@hotel'
            );

            Route::get(
                'contact',
                'PageController@contact'
            )->name('contact');
        }
    );

Auth::routes();

//admin group routes
Route::prefix('/adminn')
    ->name('adminn.')
    ->namespace('Admin')
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
            Route::resource('hotel-gallery', 'HotelsPhotoGalleryController');
            Route::resource('roomavailabilities', 'HotelRoomAvailabilitiesController');
            Route::get('/home', 'HomeController@index')->name('index');

            //using admin auth
            Route::namespace ('Auth')
                ->group(
                    function () {
                        //Login Routes
                        Route::get('/', 'LoginController@showLoginForm')->name('login');
                        Route::get('/login', 'LoginController@showLoginForm')->name('login');
                        Route::post('/login', 'LoginController@login')->name('login');
                        Route::post('/logout', 'LoginController@logout')->name('logout');
                        //Forgot Password Routes
                        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
                        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
                        //Reset Password Routes
                        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
                        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
                    }
                );
        }
    );

// booking by email for admin section
Route::get('adminn/booking-by-email', 'BookingByEmailController@create')->name('adminBookingByEmail');

// delete booking by email field
Route::get("/adminn/deleteBookingByEmail/{id}", 'BookingByEmailController@destroy');

// front end part(homepage part)

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

Route::get('/search-view', function () {
    return view('search-result');
});
