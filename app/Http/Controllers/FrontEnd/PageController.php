<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\PackageType as Pkg;
use App\IndividualPackage as Ipkgs;

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
        return view('frontend.welcome')->with('pkgs', $this->pkgs);
    }

    public function packages()
    {
        $ipkgs = $this->ipkgs;
        // return $ipkgs;
        return view('frontend.family-package')->with('ipkgs', $ipkgs);
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
