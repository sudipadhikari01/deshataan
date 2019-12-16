<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Hotel as Hotel;
use App\IndividualPackage as Ipkgs;
use App\Itinerary as Itin;
use App\PackageType as Pkg;
use App\PhotoGallery as Pg;
use App\HotelPhotoGallery as Hpg;


class PageController extends Controller
{
    private $pkgs; // pkg type {categories}
    private $ipkgs; // individual pkg { individual pkgs }

    public function __construct()
    {
        $this->pkgs = Pkg::paginate(3); // all package category list with paginate
        $this->ipkgs = Ipkgs::paginate(); //all indi pkgs list with paginate
    }

    public function home()
    {
        $page = "home";
        $pkgs = $this->pkgs;
        $ipkgs = $this->ipkgs;
        $packages = Pkg::all();
        $individualPackages = Ipkgs::orderBy('visit','desc')->get();
        $topPackages = Pkg::orderBy('visit_count','desc')->take(5)->get();
        // dd($testimonials);
        // $packages = Pkg::inRandomOrder()->limit(4)->get();
        $hotelList = Hotel::all();
        return view('frontend.layouts.home', compact('pkgs', 'page', 'ipkgs','hotelList','packages','individualPackages','topPackages'));
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
        // $visit = Pkg::find($id)->value('visit_count');
        // return $visit;
        // Pkg::where('p_id', $id)->update(array('visit_count' => $visit + 1));
        try {
            $ipkgs = $this->pkgs->find($id)->ipackages;
            return view('frontend.packages.single-package', compact('ipkgs', 'pkg', 'pkgs'));
            //code...
        } catch (\Throwable $th) {
            // $ipkgs = "No Associated Packages";
            // dd($th);
            return view('frontend.packages.single-package', compact( 'pkg', 'pkgs'));
        }
        // dd($ipkgs);
        // return $ipkgs;
        // if ($ipkgs->count() > 0 && $pkg->count() > 0) {
        //     // return $ipkgs->count();
        //     return view('frontend.packages.single-package', compact('ipkgs', 'pkg', 'pkgs'));
        // } else {
        //     // return "No iPkgs";
        //     return view('frontend.packages.single-package', compact('ipkgs', 'pkg', 'pkgs'));
        // }
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


    public static function getHotelImage($h_id)
    {
        $hotelImage = Hpg::select('name')->where('hotel_title_id',$h_id)->first();
        return $hotelImage;
    }


    public static function getPackageImage($p_id)
    {
        $package_image =  Pg::select('image_name')->where('p_id', $p_id)->first();
        // dd($package_image);
        return $package_image;
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
