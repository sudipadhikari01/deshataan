<?php

namespace App\Http\Controllers;

use App\BookingByEmail;
use App\PackageType;
use Illuminate\Http\Request;

class BookingByEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packageTypes = PackageType::all();
        return view('booking')->with('packageTypes', $packageTypes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bookingByEmails = BookingByEmail::paginate(15);
        return view('admin.booking-by-email')->with('bookingByEmails', $bookingByEmails);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookingByEmail = new BookingByEmail();
        $bookingByEmail->name = $request->input('name');
        $bookingByEmail->phone = $request->input('phone');
        $bookingByEmail->email = $request->input('email');
        $bookingByEmail->city = $request->input('city');
        $bookingByEmail->package_type = $request->input('packageType');
        $bookingByEmail->arrival_date = $request->input('arrival');
        $bookingByEmail->departure_date = $request->input('departure');
        $bookingByEmail->no_of_adults = $request->input('noofadults');
        $bookingByEmail->no_of_adults = $request->input('noofadults');
        $bookingByEmail->no_of_childrens = $request->input('noofchildrens');
        $bookingByEmail->min_price = $request->input('minprice');
        $bookingByEmail->max_price = $request->input('maxprice');

        $bookingByEmail->save();
        return redirect()->route('booking')->with('status', 'Response has been sent!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookingByEmail = BookingByEmail::find($id);
        $bookingByEmail->delete();

        return redirect()->route('adminBookingByEmail')->with('status', 'Information deleted successfully');

    }
}
