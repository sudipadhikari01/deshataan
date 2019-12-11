<?php

namespace App\Http\Controllers\FrontEnd;

use App\Hotel as Hotel;
use App\Http\Controllers\Controller;
use App\IndividualPackage as Ipkgs;
use App\Itinerary as Itin;
use App\PackageType as Pkg;
use App\PhotoGallery as Pg;

class PageController extends Controller
{
    private $pkgs; // pkg type {categories}
    private $ipkgs; // individual pkg { individual pkgs }

    public function __construct()
    {
        $this->pkgs = Pkg::paginate(); // all package category list with paginate
        $this->ipkgs = Ipkgs::paginate(); //all indi pkgs list with paginate
    }

    public function home()
    {
        $page = "home";
        $pkgs = $this->pkgs;
        $ipkgs = $this->ipkgs;
        $hotelList = Hotel::all();
        return view('frontend.layouts.home', compact('pkgs', 'page', 'ipkgs','hotelList'));
        // return view('frontend.welcome', compact('pkgs', 'page'));
    }

    public function packages()
    {
        $pkgs = $this->pkgs;
        // return $pkgs;
        return view('frontend.packages.all-pkgs')->with('pkgs', $pkgs);
    }

    /// list all individual pkgs of given category
    public function ipackages($id)
    {
        $pkgs = $this->pkgs;
        $pkg = Pkg::findOrFail($id);
        $ipkgs = $this->pkgs->find($id)->ipackages;
        // return $ipkgs;
        if ($ipkgs->count() > 0 && $pkg->count() > 0) {
            // return $ipkgs->count();
            return view('frontend.packages.single-package', compact('ipkgs', 'pkg', 'pkgs'));
        } else {
            // return "No iPkgs";
            return view('frontend.packages.single-package', compact('ipkgs', 'pkg', 'pkgs'));
        }
    }

    public function tour_details($id) // single pkg detail

    {
        $pkgs = $this->pkgs;
        // return $pkgs;
        $visit = Ipkgs::find($id)->value('visit');
        // return $visit;
        Ipkgs::where('p_id', $id)->update(array('visit' => $visit + 1));
        $sipkg = Ipkgs::find($id);
        $spkg = Pkg::find($sipkg->package_type);
        $pg = Pg::where('ip_id', $id)->get();
        $it = Itin::where('ip_id', $id)->first();
        // return $it->itinerary;
        return view('frontend.tour-details', compact('pkgs', 'sipkg', 'spkg', 'pg', 'it'));
    }

    public static function showHotelName($id)
    {
        $res = Hotel::find($id);
        if ($res != null) {
            return Hotel::find($id)->title;
        } else {
            return "No Hotel included";
        }
    }

    public static function getImage($ipid)
    {
        $pg = Pg::select('image_name')->where('ip_id', $ipid)->first();
        return $pg;
    }

    //list hotel
    public function hotels()
    {
        $pkgs = $this->pkgs;
        $hotelList = Hotel::all();
        $hotelCount = Hotel::count();

        return view(
            'frontend.hotels.hotels-list',
            compact('pkgs', 'hotelList', 'hotelCount')
        );
    }
    public function hotel($id)
    {
        $pkgs = $this->pkgs;
        $hotel = Hotel::find($id);

        return view(
            'frontend.hotels.hotel-details',
            compact('pkgs', 'hotel')
        );
    }

    public function contact()
    {
        return "Contact";
    }

    public function singlePkg($id)
    {
        return "pkg id is $id";
    }
}
