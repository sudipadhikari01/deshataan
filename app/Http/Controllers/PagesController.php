<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PackageType;
use App\IndividualPackage;
use App\AboutTour;
use App\Hotel;


class PagesController extends Controller
{
    public static function showIndividualPackage($id)
    {
        return IndividualPackage::find($id)->title;
        // return $package


    }

    public static function showPackageType($id)
    {
        $res = PackageType::find($id);
        if ($res != null) {
            return PackageType::find($id)->p_name;
        } else {
            return "No package included";
        }
        return PackageType::find($id)->p_name;
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
}
