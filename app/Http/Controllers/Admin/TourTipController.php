<?php

namespace App\Http\Controllers\admin;

use App\TourTip;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourTipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tourTips = TourTip::all();
        return view('admin.tourTip.index')->with('tourtips', $tourTips);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tourTip.create');
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
            'tip_title' => 'required',
            'tip_description' => 'required',
            'image' => 'required',

        ]);

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
            $path = $request->file('image')->storeAs('public/tourTips', $fileNameToStore);
        } else {
            $fileNameToStore = "noimage.jpg";
        }
        $tourTips = new TourTip();
        $tourTips->tip_title = $request->input('tip_title');
        $tourTips->tip_description = $request->input('tip_description');
        $tourTips->image = $fileNameToStore;
        $tourTips->save();

        return redirect()->route('adminn.tourtips.index')->with('status', "Hotels Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tourtip = TourTip::find($id);
        return view('admin.tourtip.edit')->with('tourtip', $tourtip);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tourtips = TourTip::find($id);
        $request->validate([
            'tip_title' => 'required',
            'tip_description' => 'required',

        ]);

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
            $path = $request->file('image')->storeAs('public/tourtips', $fileNameToStore);
            $tourtips->image = $fileNameToStore;
        }


        $tourtips->tip_title = $request->input('tip_title');
        $tourtips->tip_description = $request->input('tip_description');
        $tourtips->save();
        return redirect()->route('adminn.tourtips.index')->with('status', "Tour Tips Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tourtips = TourTip::find($id);

        $tourtips->delete();
        return redirect()->route('adminn.tourtips.index')->with('status', "Tour Tip Deleted Successfully");
    }
}