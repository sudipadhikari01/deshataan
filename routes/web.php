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
use Illuminate\Support\Facades\URL;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test',function(){
    return view('inc.header');
});


// admin dashboard
Route::get('/adminn',function(){
    return view('admin.index');
})->name("admin");


Route::get("adminn/packagetype",'PackageTypeController@index')->name('packages');

Route::get('/adminn/addpackage','PackageTypeController@create'); 

Route::post('/adminn/addpackage','PackageTypeController@store');
Route::get("/adminn/editPackageType/{id}","PackageTypeController@edit");
Route::post("/adminn/editPackageType/{id}","PackageTypeController@update");

Route::get("/adminn/deletePackageType/{id}","PackageTypeController@destroy");


// individual package
Route::get('adminn/individualPackage','IndividualPackageController@index')->name('individual');
// add individual package type
Route::get('/adminn/addIndividualPackage','IndividualPackageController@home');

// store all individual package
Route::post('/adminn/addIndividualPackage','IndividualPackageController@store');

// edit individual package
Route::get("/adminn/editIndividualPackage/{p_id}",'IndividualPackageController@edit');

// update edit content
Route::post("/adminn/editIndividualPackage/{p_id}",'IndividualPackageController@update');

// delete individual content
Route::get("/adminn/deleteIndividualPackage/{p_id}",'IndividualPackageController@destroy');

// abour tour section
Route::get('/adminn/aboutTour',"AboutTourController@index")->name('about-tour');

// add about tour
Route::get('/adminn/addAboutTour',"AboutTourController@add");
Route::post('/adminn/addAboutTour',"AboutTourController@store");


// edit about tour
Route::get('/adminn/editAboutTour/{id}','AboutTourController@edit');
Route::post('/adminn/editAboutTour/{id}','AboutTourController@update');

// delete about the tour
Route::get("/adminn/deleteAboutTour/{id}",'AboutTourController@destroy');



// admin photo gallery
Route::get('adminn/photo-gallery','PhotoGalleryController@index')->name('photo-gallery');

// add photo to the gallery
Route::get('adminn/addPhoto','PhotoGalleryController@create');
Route::post('adminn/addPhoto','PhotoGalleryController@store');

// edit photo
Route::get("/adminn/editPhoto/{id}",'PhotoGalleryController@edit');
Route::post("/adminn/editPhoto/{id}",'PhotoGalleryController@update');

// delete photo
Route::get("/adminn/deletePhoto/{id}",'PhotoGalleryController@destroy');


// test
Route::get("/individualPkg/{id}",'PagesController@showIndividualPackage');

Route::get('/packageType/{id}','PagesController@showPackageType');

// trip information filed 
Route::get('/adminn/trip-information','AboutTheTripInformationController@index')->name('trip-information');
// add trip information
Route::get('adminn/addTripInformation','AboutTheTripInformationController@create');
Route::post('adminn/addTripInformation','AboutTheTripInformationController@store');


// edit trip information 
Route::get("adminn/editTripInformation/{id}",'AboutTheTripInformationController@edit');
Route::post("adminn/editTripInformation/{id}",'AboutTheTripInformationController@update');

// delete trip information
Route::get("adminn/deleteTripInformation/{id}",'AboutTheTripInformationController@destroy');


// itinerary  field
Route::get('/adminn/itinerary','ItineraryController@index')->name('itinerary');

// add itinerary
Route::get('/adminn/addItinerary','ItineraryController@create');
Route::post('/adminn/addItinerary','ItineraryController@store');

// edit itinerary
Route::get('/adminn/editItinerary/{id}','ItineraryController@edit');
Route::post('/adminn/editItinerary/{id}','ItineraryController@update');


// delete itinerary

Route::get('/adminn/deleteItinerary/{id}','ItineraryController@destroy');

// booking by email for admin section
Route::get('adminn/booking-by-email','BookingByEmailController@create')->name('adminBookingByEmail');

// delete booking by email field
Route::get("/adminn/deleteBookingByEmail/{id}",'BookingByEmailController@destroy');

// front end part(homepage part)
Route::get('/family-package',function(){
    return view('family-package');
})->name('home');

// booking
Route::get('/booking','BookingByEmailController@index')->name('booking');

// tour details
Route::get('/tour-details',function(){
    return view('tour-details');
});

// store the booking information
Route::post('/booking','BookingByEmailController@store');


