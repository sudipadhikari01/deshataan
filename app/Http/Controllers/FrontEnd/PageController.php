<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\PackageType as Pkg;
use App\IndividualPackage as Ipkgs;
use App\PhotoGallery as Pg;

class PageController extends Controller
{
    private $pkgs; // pkg type {categories}
    private $ipkgs; // individual pkg { individual pkgs }

    public function __construct()
    {
        $this->pkgs = Pkg::paginate();
        $this->ipkgs = Ipkgs::paginate();
    }
    public function home()
    {
        $page = "home";
        $pkgs = $this->pkgs;
        return view('frontend.welcome', compact('pkgs', 'page'));
    }

    public function packages()
    {
        $pkgs = $this->pkgs;
        // return $pkgs;
        return view('frontend.packages.all-pkgs')->with('pkgs', $pkgs);
    }
    public function ipackages($id)
    {
        $pkgs = $this->pkgs;
        $pkg = Pkg::findOrFail($id);
        $ipkgs = $this->ipkgs->where('package_type', $id);
        // return $ipkgs;
        if ($ipkgs->count() > 0) {
            return view('frontend.packages.single-package', compact('ipkgs', 'pkg', 'pkgs', 'pg'));
        } else {
            return view('frontend.packages.single-package', compact('ipkgs', 'pkg', 'pkgs', 'pg'));
        }
    }

    public static function getImage($ipid)
    {
        $pg = Pg::where('ip_id', $ipid)->get();
        return $pg;
    }

    public function hotels()
    { }

    public function contact()
    { }

    public function singlePkg($id)
    {
        return "pkg id is $id";
    }
}
