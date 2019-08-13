<?php

namespace App\Http\Controllers\FrontEnd;

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
        return view('frontend.layouts.home', compact('pkgs', 'page'));
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
        $ipkgs = $this->ipkgs->where('package_type', $id);
        // return $ipkgs;
        // return Pg::count();
        if (Pg::count() > 0) {
            $pg = Pg::where(['p_id' => $id, 'ip_id' => $ipkgs[0]->p_id])->first();
        } else {
            $pg = false;
        }
        if ($ipkgs->count() > 0 && $pkgs->count() > 0) {
            // return $ipkgs->count();
            return view('frontend.packages.single-package', compact('ipkgs', 'pkg', 'pkgs', 'pg'));
        } else {
            // return "No iPkgs";
            return view('frontend.packages.single-package', compact('ipkgs', 'pkg', 'pkgs', 'pg'));
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
        $it = Itin::where('ip_id', $id)->get();
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
        $pg = Pg::find('ip_id', $ipid)->get();
        return $pg;
    }

    //list hotel
    public function hotels()
    {
        return view('frontend.hotels.hotels-list');
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
