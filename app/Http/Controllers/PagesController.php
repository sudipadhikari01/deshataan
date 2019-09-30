<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\IndividualPackage;
use App\PackageType;

class PagesController extends Controller
{
    public static function showIndividualPackage($id)
    {

        $res = IndividualPackage::find($id);
        if ($res != null) {
            return IndividualPackage::find($id)->title;
        } else {
            return "Individual package unassociated";
        }

    }

    public static function showPackageType($id)
    {
        $res = PackageType::find($id);
        if ($res != null) {
            return PackageType::find($id)->p_name;
        } else {
            return "Package unassociated";
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
