<?php

namespace App\Http\Controllers\Admin;

use App\Hotel;
use App\HotelPhotoGallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelsPhotoGalleryController extends Controller
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
            $files = $request->file('image');
            foreach ($files as $file) {
                //get the file name with the extension
                $filenameWithExt = $file->getClientOriginalName();
                //get just file name
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //get just extension
                $extension = $file->getClientOriginalExtension();
                //file name to store
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                //upload image
                $path = $file->storeAs('public/photogallery', $fileNameToStore);
                // $path = $file->storeAs('public/pkgGall', $fileNameToStore);

                $hotelPhotos = new HotelPhotoGallery();
                $hotelPhotos->name = $fileNameToStore;
                $hotelPhotos->title = $request->input('imageTitle');
                $hotelPhotos->description = $request->input('imageDesc');
                $hotelPhotos->hotel_title_id = $request->input('hotelName');
                $hotelPhotos->save();
            }
        } else {
            $fileNameToStore = "noimage.jpg";
            $hotelPhotos = new HotelPhotoGallery();
            $hotelPhotos->title = $request->input('imageTitle');
            $hotelPhotos->description = $request->input('imageDesc');
            $hotelPhotos->hotel_title_id = $request->input('hotelName');
            $hotelPhotos->name = $fileNameToStore;
            $hotelPhotos->save();
        }



        return redirect()->route('adminn.hotel-gallery.index')->with('status', "Hotel image added succesfully");
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
        // echo "<pre>";
        // print_r($hotels);

        $hotelPhotos = HotelPhotoGallery::find($id);
        // print_r($hotelPhotos);
        // die;
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

        $hotelPhotos = HotelPhotoGallery::find($id);
        $hotelPhotos->title = $request->input('imageTitle');
        $hotelPhotos->description = $request->input('imageDesc');
        $hotelPhotos->hotel_title_id = $request->input('hotelName');
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
            $hotelPhotos->name = $fileNameToStore;
        }
        $hotelPhotos->save();

        return redirect()->route('adminn.hotel-gallery.index')->with('status', "Hotel image Updated succesfully");
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
        return redirect()->route('adminn.hotel-gallery.index')->with('status', "Hotel image Deleted succesfully");
    }
}