<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
        dd($request->input('search-city'),$request->input('search-package-type'));
        return view('search-result');
    }

    public function familyPackage(){
        return view('family-package');
    }

    
}
