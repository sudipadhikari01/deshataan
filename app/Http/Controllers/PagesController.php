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
        return IndividualPackage::findorFail($id)->title;
        // return $package


    }

    public static function showPackageType($id)
    {
<<<<<<< HEAD
    	$res = PackageType::find($id);
    	if($res!=null){
        	return PackageType::find($id)->p_name;
    	}else{
    		return "No package included";
    	}
=======
        
        return PackageType::find($id)->p_name;
>>>>>>> bca6bfe2c41d7b9648a3b18b9cdb2858c2b4e53c
    }

    public static function showHotelName($id)
    {
    	$res = Hotel::find($id);
    	if($res!=null){
        	return Hotel::find($id)->title;
        }else{
        	return "No Hotel included";
        }
    }
}
