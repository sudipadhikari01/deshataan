<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\IndividualPackage;
use App\PackageType;
use App\TripInformation;
use Illuminate\Http\Request;

class AboutTheTripInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = PackageType::all();
        $tripInformations = TripInformation::all();
        return view('admin.trip-information')->with(['tripInformations' => $tripInformations, 'packages' => $packages]);
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
        return view('admin.addTripInformation')->with(['packages' => $packages, 'individualPkgs' => $individualPkgs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tripInformation = new TripInformation();
        $tripInformation->arrival_date = $request->input('arrivalDate');
        $tripInformation->departure_date = $request->input('departureDate');
        $tripInformation->inclusions = $request->input('inclusions');
        $tripInformation->p_id = $request->input('packageType');
        $tripInformation->ip_id = $request->input('individualPackage');

        $tripInformation->save();
        return redirect()->route('adminn.trip-info.index')->with("status", "Trip Information Added Successfully");

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
        $itripInformation = TripInformation::find($id);
        $packages = PackageType::all();
        $individualPkgs = IndividualPackage::all();
        return view('admin.editTripInformation')->with(['itripInformation' => $itripInformation, 'packages' => $packages, 'individualPkgs' => $individualPkgs]);

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
        $tripInformation = TripInformation::find($id);
        $tripInformation->arrival_date = $request->input('arrivalDate');
        $tripInformation->departure_date = $request->input('departureDate');
        $tripInformation->inclusions = $request->input('inclusions');
        $tripInformation->p_id = $request->input('packageType');
        $tripInformation->ip_id = $request->input('individualPackage');

        $tripInformation->save();
        return redirect()->route('adminn.trip-info.index')->with("status", "Trip Information Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itripInformation = TripInformation::find($id);
        $itripInformation->delete();

        return redirect()->route('adminn.trip-info.index')->with("status", "Trip Information Deleted Successfully");

    }
}
