<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Hotel as Hotel;
use App\IndividualPackage as Ipkgs;
use App\Itinerary as Itin;
use App\PackageType as Pkg;
use App\PhotoGallery as Pg;
use App\HotelPhotoGallery as Hpg;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        return $this->middleware('auth:admin');
    }
    public function index()
    {
        $packages = Pkg::all();
        $hotelList = Hotel::all();
        $individualPackages = Ipkgs::all();
        $topPackages = Pkg::orderBy('visit_count','desc')->take(5)->get();
        return view('admin.index',compact('packages','hotelList','individualPackages','topPackages'));

    }

}
