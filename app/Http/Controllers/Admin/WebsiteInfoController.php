<?php

namespace App\Http\Controllers\admin;

use App\PageInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsiteInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pages = PageInfo::all();
        return view('admin.pageInfo.index')->with('pages', $pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pageInfo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $hotels = new PageInfo();
        // $hotels->title = $request->input('hotelTitle');
        // $hotels->location = $request->input('hotelLocation');
        // $hotels->contact = $request->input('hotelContact');
        // $hotels->price = $request->input('hotelPrice');
        // $hotels->available_room = $request->input('availableRoom');
        // $hotels->description = $request->input('hotelDesc');
        // $hotels->map = $request->input('hotelLocationMap');
        // $hotels->amenities = $request->input('hotelAmenities');

        // $hotels->save();

        // return redirect()->route('adminn.hotels.index')->with('status', "Hotels Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function show(PageInfo $pageInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(PageInfo $pageInfo)
    {
        $editPageInfo = PageInfo::find($id);
        return view('admin.pageInfo.editHotels')->compact('editPageInfo');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageInfo $pageInfo)
    {
        // $hotels = Hotel::find($id);

        // $hotels->title = $request->input('hotelTitle');
        // $hotels->location = $request->input('hotelLocation');
        // $hotels->contact = $request->input('hotelContact');
        // $hotels->price = $request->input('hotelPrice');
        // $hotels->available_room = $request->input('availableRoom');
        // $hotels->description = $request->input('hotelDesc');
        // $hotels->amenities = $request->input('hotelAmenities');
        // $hotels->map = $request->input('hotelLocationMap');

        // $hotels->save();

        // return redirect()->route('adminn.hotels.index')->with('status', "Hotels Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageInfo $pageInfo)
    {
        // $hotels = Hotel::find($id);

        // $hotels->delete();
        // return redirect()->route('adminn.hotels.index')->with('status', "Hotels Deleted Successfully");
    }
}