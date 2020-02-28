<?php

namespace App\Http\Controllers\Admin;

use App\HotelAmenities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelAmenitiesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotelAmenities = HotelAmenities::all();
        return view('admin.hotelAmenities.index')->with('hotelAmenities', $hotelAmenities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hotelAmenities.addHotelAmenities');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        // return $request;
        $hotelAmenities = new HotelAmenities();

        $hotelAmenities->title = $request->input('title');

        $hotelAmenities->save();
        return redirect()->route('adminn.hotel-amenities.index')->with("status", "Hotel Amenity added successfully");
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
        $hotel_amenities = HotelAmenities::find($id);
        return view('admin.hotelAmenities.editHotelAMenities')->with(['hotel_amenities' => $hotel_amenities]);
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
        $request->validate([
            'title' => 'required',
        ]);
        $hotel_amenities = HotelAmenities::find($id);
        $hotel_amenities->title = $request->input('title');
        $hotel_amenities->save();
        return redirect()->route('adminn.hotel-amenities.index')->with("status", "Hotel Amenity Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel_amenities = HotelAmenities::find($id);
        $hotel_amenities->delete();

        return redirect()->route('adminn.hotel-amenities.index')->with("status", "Hotel Amenity Deleted successfully");;
    }
}