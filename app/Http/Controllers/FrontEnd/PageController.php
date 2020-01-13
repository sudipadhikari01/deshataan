<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Hotel as Hotel;
use App\IndividualPackage as Ipkgs;
use App\Itinerary as Itin;
use App\PackageType as Pkg;
use App\PhotoGallery as Pg;
use App\HotelPhotoGallery as Hpg;
use App\HotelSpecialFeatures as HSF;
use App\HotelRoomAvailabilities as HRA;
use Illuminate\Support\Facades\DB;


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
        try {
            $topPackages = Pkg::orderBy('visit_count', 'desc')->take(5)->get();
        } catch (\Throwable $th) {
            $topPackages = $packages;
        }
        try {
            $individualPackages = Ipkgs::orderBy('visit', 'desc')->get();
        } catch (\Throwable $th) {
            $individualPackages = $ipkgs;
        }
        // $packages = Pkg::inRandomOrder()->limit(4)->get();
        $hotelList = Hotel::all();
        return view('frontend.layouts.home', compact('pkgs', 'page', 'ipkgs', 'hotelList', 'packages', 'individualPackages', 'topPackages'));
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
        try {
            $visit = Pkg::find($id)->value('visit_count');
            Pkg::where('p_id', $id)->update(array('visit_count' => $visit + 1));
        } catch (\Throwable $th) {
            echo $th;
        }

        try {
            $ipkgs = DB::select('SELECT * FROM `packages` pk WHERE json_search(pk.package_type,"one","' . $id . '") is not null');
            return view('frontend.packages.single-package', compact('ipkgs', 'pkg', 'pkgs'));
        } catch (\Throwable $th) {
            return view('frontend.packages.single-package', compact('pkg', 'pkgs'));
        }
    }

    public function tour_details($id) // single pkg detail

    {
        $pkgs = $this->pkgs;
        try {
            $visit = Ipkgs::find($id)->value('visit');
            Ipkgs::where('p_id', $id)->update(array('visit' => $visit + 1));
        } catch (\Throwable $th) {
            echo $th;
        }
        $sipkg = Ipkgs::find($id);
        $spkg = Pkg::find($sipkg->package_type);
        $pg = Pg::where('ip_id', $id)->get();
        $it = Itin::where('ip_id', $id)->first();
        $individualPackages = Ipkgs::orderBy('visit', 'desc')->get();
        // dd($sipkg);
        // return $it->itinerary;
        return view('frontend.tour-details', compact('pkgs', 'sipkg', 'spkg', 'pg', 'it', 'individualPackages'));
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
        $hotelImage = Hpg::select('name')->where('hotel_title_id', $h_id)->first();
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
        $hotelPhotoGallery = Hpg::where('hotel_title_id', $id)->get();
        $hotelFeatures = HSF::where('hotel_title_id', $id)->get();
        $hotelRoomAvail = HRA::where('hotel_type_id', $id)->get();
        // echo "<pre>";
        // print_r($hotelRoomAvail);
        // die;
        return view(
            'frontend.hotels.hotel-details',
            compact('pkgs', 'hotel', 'hotelPhotoGallery', 'hotelFeatures', 'hotelRoomAvail')
        );
    }


    public function singlePkg($id)
    {
        return "pkg id is $id";
    }
}