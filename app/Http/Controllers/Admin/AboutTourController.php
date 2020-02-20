<?php

namespace App\Http\Controllers\Admin;

use App\AboutTour;
use App\Http\Controllers\Controller;
use App\IndividualPackage;
use App\PackageType;
use Illuminate\Http\Request;

class AboutTourController extends Controller
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
        $packages = PackageType::all();
        $individualPkgs = IndividualPackage::all();
        $aboutTours = AboutTour::all();
        return view('admin.about-tour')->with(['packages' => $packages, 'individualPkgs' => $individualPkgs, 'aboutTours' => $aboutTours]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $packages = PackageType::all();
        $individualPkgs = IndividualPackage::all();
        return view('admin.addAboutTour')->with(['packages' => $packages, 'individualPkgs' => $individualPkgs]);
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
            'placesCovered' => 'required',
            'inclusions' => 'required',
            'exclusions' => 'required',
            'packageType' => 'required',
            'individualPackage' => 'required',
        ]);
        $aboutTour = new AboutTour();
        $aboutTour->places_covered = $request->input('placesCovered');
        $aboutTour->inclusions = $request->input('inclusions');
        $aboutTour->exclusions = $request->input('exclusions');
        $aboutTour->event_date = $request->input('eventDate');
        $aboutTour->p_id = $request->input('packageType');
        $aboutTour->ip_id = $request->input('individualPackage');
        $aboutTour->map = $request->input('tourLocationMap');

        $aboutTour->save();

        return redirect()->route('adminn.aboutTour.index')->with("status", "About Tour added successfully");
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
        $packages = PackageType::all();
        $individualPkgs = IndividualPackage::all();
        $iaboutTour = AboutTour::find($id);
        return view('admin.editAboutTour')->with(['packages' => $packages, 'individualPkgs' => $individualPkgs, 'iaboutTour' => $iaboutTour]);
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
            'placesCovered' => 'required',
            'tourinclusionsedit' => 'required',
            'exclusions' => 'required',
            'packageType' => 'required',
            'individualPackage' => 'required',
        ]);

        $aboutTour = AboutTour::find($id);
        // dd($aboutTour);
        $aboutTour->places_covered = $request->input('placesCovered');
        $aboutTour->inclusions = $request->input('tourinclusionsedit');
        $aboutTour->exclusions = $request->input('exclusions');
        $aboutTour->event_date = $request->input('eventDate');
        $aboutTour->p_id = $request->input('packageType');
        $aboutTour->ip_id = $request->input('individualPackage');
        $aboutTour->map = $request->input('tourLocationMap');

        $aboutTour->save();

        return redirect()->route('adminn.aboutTour.index')->with("status", "About Tour updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iaboutTour = AboutTour::find($id);
        $iaboutTour->delete();

        return redirect()->route('adminn.aboutTour.index')->with("status", "About Tour deleted successfully");
    }
}