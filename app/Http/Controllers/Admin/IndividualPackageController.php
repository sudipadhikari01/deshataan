<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\IndividualPackage as IndividualPackage ;
use App\PackageType;
use Illuminate\Http\Request;

class IndividualPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        return $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $individualPkgs = IndividualPackage::all();
        // if (!empty($individualPkgs)) 
        // {
        //     // foreach($individualPkgs as $pkg)
        //     // {
        //     //     $package = $this->getPackage($pkg->package_type);
        //     //     $individualPkgs->put('packageType', $package);
        //     // }
        // }
        // else{
            
        // }
        
        // return $individualPkgs;
        return view('admin.individualPackage')->with('individualPkgs', $individualPkgs);
    }

    public function home()
    {
        $packages = PackageType::all();

        return view('admin.addIndividualPackage')->with('packages', $packages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = PackageType::all();
        return view('admin.addIndividualPackage')->with('packages', $packages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->packageType);
        if($request->input('packageType'))
        {
            $packagesType = json_encode($request->input('packageType'));
        }
        else{
            $packagesType = array();
        }
        // print_r($packages);

        // dd(json_decode($packages));
        $individualPkg = new IndividualPackage();

        $individualPkg->title = $request->input('title');
        $individualPkg->description = $request->input('description');
        $individualPkg->location = $request->input('location');
        $individualPkg->duration = $request->input('duration');
        $individualPkg->start_date = $request->input('startDate');
        $individualPkg->end_date = $request->input('endDate');
        $individualPkg->ticket_quantity = $request->input('ticketQuantity');
        $individualPkg->price = $request->input('price');
        $individualPkg->discount = $request->input('discount');
        $individualPkg->package_type = $packagesType;
        // $individualPkg->package_type = $request->input('packageType');
        $individualPkg->save();

        return redirect()->route('adminn.indipackage.index')->with("status", "Individual Package added successfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($p_id)
    {
        $packages = PackageType::all();
        $individualPkg = IndividualPackage::find($p_id);

        return view('admin.editIndividualPackage')->with(['individualPkg' => $individualPkg, 'packages' => $packages]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $p_id)
    {
        // return $request;
        $individualPkg = IndividualPackage::find($p_id);

        $individualPkg->title = $request->input('title');
        $individualPkg->description = $request->input('description');
        $individualPkg->location = $request->input('location');
        $individualPkg->duration = $request->input('duration');
        $individualPkg->start_date = $request->input('startDate');
        $individualPkg->end_date = $request->input('endDate');
        $individualPkg->ticket_quantity = $request->input('ticketQuantity');
        $individualPkg->price = $request->input('price');
        $individualPkg->discount = $request->input('discount');
        if($request->input('packageType'))
        {
            $packagesType = json_encode($request->input('packageType'));
        }
        else{
            $packagesType = array();
        }
        $individualPkg->package_type = $packagesType;

        $individualPkg->save();

        return redirect()->route('adminn.indipackage.index')->with("status", "Individual Package Updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($p_id)
    {
        $individualPkg = IndividualPackage::find($p_id);
        $individualPkg->delete();
        return redirect()->route('adminn.indipackage.index')->with("status", "Individual Package Deleted successfully");

    }

    public static function count()
    {
        return IndividualPackage::count();
    }

    public static function getPkgTypeObject($pkgTypeId)
    {
        // return $pkgTypeId;
        // // print_r($pkg);
        $packages = json_decode($pkgTypeId);
        foreach($packages as $pkg)
        {
            $new[] = PackageType::find($pkg);
        };
        return $new;
        // print_r($package);
    }
}
