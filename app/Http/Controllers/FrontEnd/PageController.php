<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\PackageType as Pkg;

class PageController extends Controller
{
    private $pkgs;

    public function __construct()
    {
        $this->pkgs = Pkg::all();
    }
    public function home()
    {
        return view('frontend.welcome')->with('pkgs', $this->pkgs);
    }

    public function packages()
    {
        $pkgs = $this->pkgs->paginate();
        // return view('frontend.family-package')->with('pkgs', $pkgs);
        return "pkg list";
    }

    public function hotels()
    {

    }

    public function contact()
    {

    }

    public function singlePkg($id)
    {
        return "pkg id is $id";
    }

}
