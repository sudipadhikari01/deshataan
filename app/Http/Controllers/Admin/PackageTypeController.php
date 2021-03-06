<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PackageType;
use Illuminate\Http\Request;

class PackageTypeController extends Controller
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
        $packages = PackageType::paginate(10);
        return view('admin.packageType')->with('packages', $packages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addPackage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'packageType' => 'required',
            'packageDesc' => 'required',
            
        ]);
        $packageType = new PackageType();

        $packageType->p_name = $request->input("packageType");
        $packageType->p_desc = $request->input("packageDesc");
        $packageType->visit_count = 0;

        $packageType->save();

        // return redirect()->route('adminn/packagetype');
        return redirect()->route('adminn.packagetype.index')->with("status", "Package Added Successfully");
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
    public function edit($id)
    {
        //
        $singlePackage = \App\PackageType::find($id);
        //

        return view("admin.editPackage")->with("singlePackage", $singlePackage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'packageType' => 'required',
            'packageDesc' => 'required',
            
        ]);
        $singlePackage = \App\PackageType::find($id);
        $singlePackage->p_name = $request->input("packageType");
        $singlePackage->p_desc = $request->input("packageDesc");

        $singlePackage->save();
        return redirect()->route('adminn.packagetype.index')->with("status", "Package Edited Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $singlePackage = \App\PackageType::find($id);
        $singlePackage->delete();

        return redirect()->route('adminn.packagetype.index')->with("status", "Package Deleted Successfully");

    }

    public static function count()
    {
        return PackageType::count();
    }
}
