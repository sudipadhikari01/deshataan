<?php

namespace App\Http\Controllers\Admin;

use App\Hotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        return $this->middleware('auth:admin');
    }

    public function index()
    {
        $hotels = Hotel::all();
        return view('admin.hotels.hotels-list')->with('hotels', $hotels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hotels.addHotels');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hotels = new Hotel();
        $hotels->title = $request->input('hotelTitle');
        $hotels->location = $request->input('hotelLocation');
        $hotels->contact = $request->input('hotelContact');
        $hotels->price = $request->input('hotelPrice');
        $hotels->available_room = $request->input('availableRoom');
        $hotels->description = $request->input('hotelDesc');
        $hotels->map = $request->input('hotelLocationMap');
        $hotels->amenities = $request->input('hotelAmenities');

        $hotels->save();

        return redirect()->route('adminn.hotels.index')->with('status', "Hotels Added Successfully");
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
        $hotel = Hotel::find($id);
        return view('admin.hotels.editHotels')->with('hotel', $hotel);
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
        $hotels = Hotel::find($id);

        $hotels->title = $request->input('hotelTitle');
        $hotels->location = $request->input('hotelLocation');
        $hotels->contact = $request->input('hotelContact');
        $hotels->price = $request->input('hotelPrice');
        $hotels->available_room = $request->input('availableRoom');
        $hotels->description = $request->input('hotelDesc');
        $hotels->amenities = $request->input('hotelAmenities');
        $hotels->map = $request->input('hotelLocationMap');

        $hotels->save();

        return redirect()->route('adminn.hotels.index')->with('status', "Hotels Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotels = Hotel::find($id);

        $hotels->delete();
        return redirect()->route('adminn.hotels.index')->with('status', "Hotels Deleted Successfully");
    }

    public static function count()
    {
        return Hotel::count();
    }
}