<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;  
use App\IndividualPackage;

class SearchController extends Controller
{
    public function index(Request $request){
        dd($request->input('search-city'),$request->input('search-package-type'));
        return view('search-result');
    }

    
    public function searchById(Request $request){

        $package_type_id =$package->package_type;
        // $package_type =PagesController::showPackageType($package_type_id);
        $search_city = $request->input('search-city');
        $search_package_type = $request->input('search-package-type');

        if( $search_city != "" || $search_package_type !="" ){

            if(!empty($search_city) && !empty($search_package_type)){
                 $search_result = IndividualPackage::where([
                    ['location','LIKE','%'. $search_city .'%'],
                     ['package_type','=' ,$package_type_id], 
               ])->get();

               return view('search-result')->with('search-result',$search_result);
            }

            else if(!empty($search_city) ){
                 $search_result = IndividualPackage::where('location','LIKE','%'. $search_city .'%')->get();
                return view('search-result')->with('search-result',$search_result);
            }
            
            else if(!empty($search_package_typ)){
                 $search_result = IndividualPackage::where('package_type','=' ,$package_type_id)->get();
                 return view('search-result')->with('search-result',$search_result);
            }
           
        }
        else{
            return "there is nothing to show";
        }

       
       
                                           
        
        // return view('search-result');

    }

    
}
