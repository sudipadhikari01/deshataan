<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HotelSpecialFeatures;
use App\Hotel;

class HotelSpecialFeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotelSpecialFeatures = HotelSpecialFeatures::all();
        return view('admin.hotels.hotel-special-features.hotel-special-features')->with('hotelSpecialFeatures',$hotelSpecialFeatures);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels = Hotel::all();
        return view('admin.hotels.hotel-special-features.addHotelsFeatures')->with('hotels',$hotels);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hotelSpecialFeatures = new HotelSpecialFeatures();

        $hotelSpecialFeatures->places_covered = $request->input('placesCovered');
        $hotelSpecialFeatures->inclusions = $request->input('inclusions');
        $hotelSpecialFeatures->exclusions = $request->input('exclusions');
        $hotelSpecialFeatures->event_date = $request->input('date');
        $hotelSpecialFeatures->hotel_title_id = $request->input('hotelName');

        $hotelSpecialFeatures->save();

        return redirect()->route('hotel-special-features')->with('status','Hotel special featurs added successfully');
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
        $hotelSpecialFeatures = HotelSpecialFeatures::find($id);
        $hotels = Hotel::all();

        return view('admin.hotels.hotel-special-features.editHotelsFeatures')->with(['hotelSpecialFeatures'=>$hotelSpecialFeatures,'hotels'=>$hotels]);
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
        $hotelSpecialFeatures =  HotelSpecialFeatures::find($id);

        $hotelSpecialFeatures->places_covered = $request->input('placesCovered');
        $hotelSpecialFeatures->inclusions = $request->input('inclusions');
        $hotelSpecialFeatures->exclusions = $request->input('exclusions');
        $hotelSpecialFeatures->event_date = $request->input('date');
        $hotelSpecialFeatures->hotel_title_id = $request->input('hotelName');

        $hotelSpecialFeatures->save();

        return redirect()->route('hotel-special-features')->with('status','Hotel special featurs Edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotelSpecialFeatures =  HotelSpecialFeatures::find($id);
        $hotelSpecialFeatures->delete();

        return redirect()->route('hotel-special-features')->with('status','Hotel special featurs Deleted successfully');
    }
}
