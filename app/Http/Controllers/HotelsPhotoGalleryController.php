<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\HotelPhotoGallery;
use Illuminate\Http\Request;

class HotelsPhotoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();
        $hotelPhotos = HotelPhotoGallery::all();
        return view('admin.hotels.photo.hotels-photo-gallery')->with('hotelPhotos', $hotelPhotos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels = Hotel::all();
        return view('admin.hotels.photo.addHotelsPhoto')->with('hotels', $hotels);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('image')) {

            //get the file name with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();

            //get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get just extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //file name to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            //upload image

            $path = $request->file('image')->storeAs('public/photogallery', $fileNameToStore);

        } else {

            $fileNameToStore1 = "noimage.jpg";
        }

        $hotelPhotos = new HotelPhotoGallery();
        $hotelPhotos->title = $request->input('imageTitle');
        $hotelPhotos->description = $request->input('imageDesc');
        $hotelPhotos->name = $fileNameToStore;
        $hotelPhotos->hotel_title_id = $request->input('hotelName');

        $hotelPhotos->save();

        return redirect()->route('hoetels-photo')->with('status', "Hotel image added succesfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotels = Hotel::all();

        $hotelPhotos = HotelPhotoGallery::find($id);
        return view('admin.hotels.photo.editHotelsPhoto')->with(['hotelPhotos' => $hotelPhotos, 'hotels' => $hotels]);
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

        if ($request->hasFile('image')) {

            //get the file name with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();

            //get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get just extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //file name to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            //upload image

            $path = $request->file('image')->storeAs('public/photogallery', $fileNameToStore);

        } else {

            $fileNameToStore1 = "noimage.jpg";
        }

        $hotelPhotos = HotelPhotoGallery::find($id);

        $hotelPhotos->title = $request->input('imageTitle');
        $hotelPhotos->description = $request->input('imageDesc');
        $hotelPhotos->name = $fileNameToStore;
        $hotelPhotos->hotel_title_id = $request->input('hotelName');

        $hotelPhotos->save();

        return redirect()->route('hoetels-photo')->with('status', "Hotel image Updated succesfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotelPhotos = HotelPhotoGallery::find($id);
        $hotelPhotos->delete();

        return redirect()->route('hoetels-photo')->with('status', "Hotel image Deleted succesfully");
    }
}
