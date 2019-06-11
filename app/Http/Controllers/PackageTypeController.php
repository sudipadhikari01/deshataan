<?php

namespace App\Http\Controllers;

use App\PackageType;
use Illuminate\Http\Request;

class PackageTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $packageType = new PackageType();

        $packageType->p_name = $request->input("packageType");
        $packageType->p_desc = $request->input("packageDesc");

        $packageType->save();

        // return redirect()->route('adminn/packagetype');
        return redirect()->route('adminn.packagetype.index');
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
        $singlePackage = \App\PackageType::find($id);
        $singlePackage->p_name = $request->input("packageType");
        $singlePackage->p_desc = $request->input("packageDesc");

        $singlePackage->save();
        return redirect()->route('adminn.packagetype.index');

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

        return redirect()->route('adminn.packagetype.index');

    }
}
