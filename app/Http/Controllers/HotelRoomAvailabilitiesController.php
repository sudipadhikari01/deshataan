<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\HotelRoomAvailabilities;
use Illuminate\Http\Request;

class HotelRoomAvailabilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel_room_availabilities = HotelRoomAvailabilities::all();
        // return $hotel_room_availabilities;
        return view('admin.hotels.hotel-room-availabilities.hotel-room-avalabilities')->with('hotel_room_availabilities', $hotel_room_availabilities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels = Hotel::all();
        return view('admin.hotels.hotel-room-availabilities.addHotelRoomAvai')->with('hotels', $hotels);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hotelRoomAvai = new HotelRoomAvailabilities();

        $hotelRoomAvai->title = $request->input('title');
        $hotelRoomAvai->amenities = $request->input('amenities');
        $hotelRoomAvai->includes = $request->input('includes');
        $hotelRoomAvai->maximum_person = $request->input('maximumPerson');
        $hotelRoomAvai->price = $request->input('price');
        $hotelRoomAvai->hotel_type_id = $request->input('hotelName');

        $hotelRoomAvai->save();

        return redirect()->route('adminn.roomavailabilities.index')->with('status', "Hotel room availabilities added successfully");

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
        $hotelRoomAvai = HotelRoomAvailabilities::find($id);
        $hotels = Hotel::all();
        return view('admin.hotels.hotel-room-availabilities.editHotelRoomAvai')->with(['hotels' => $hotels, 'hotelRoomAvai' => $hotelRoomAvai]);
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
        $hotelRoomAvai = HotelRoomAvailabilities::find($id);

        $hotelRoomAvai->title = $request->input('title');
        $hotelRoomAvai->amenities = $request->input('amenities');
        $hotelRoomAvai->includes = $request->input('includes');
        $hotelRoomAvai->maximum_person = $request->input('maximumPerson');
        $hotelRoomAvai->price = $request->input('price');
        $hotelRoomAvai->hotel_type_id = $request->input('hotelName');

        $hotelRoomAvai->save();

        return redirect()->route('adminn.roomavailabilities.index')->with('status', "Hotel room availabilities Edited successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotelRoomAvai = HotelRoomAvailabilities::find($id);

        $hotelRoomAvai->delete();
        return redirect()->route('adminn.roomavailabilities.indexclear')->with('status', "Hotel room availabilities Deleted successfully");
    }
}
