<?php

namespace App\Http\Controllers\admin;

use App\WebsiteInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsiteInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $infos = WebsiteInfo::all();
        return view('admin.websiteInfo.index')->with('infos', $infos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.websiteInfo.create');
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
            'website_name' => 'required',
        ]);
        // Logo Store
        if ($request->hasFile('website_logo')) {
            $filenameWithExt = $request->file('website_logo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('website_logo')->getClientOriginalExtension();
            $fileNameToStore_logo = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('website_logo')->storeAs('public/websiteInfo', $fileNameToStore_logo);
        } else {
            $fileNameToStore_logo = "noimage.jpg";
        }
        // FavIcon Store
        if ($request->hasFile('website_favIcon')) {
            $filenameWithExt = $request->file('website_favIcon')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('website_favIcon')->getClientOriginalExtension();
            $fileNameToStore_favIcon = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('website_favIcon')->storeAs('public/websiteInfo', $fileNameToStore_favIcon);
        } else {
            $fileNameToStore_favIcon = "noimage.jpg";
        }
        // Default Website Image Store
        if ($request->hasFile('website_default_image')) {
            $filenameWithExt = $request->file('website_default_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('website_default_image')->getClientOriginalExtension();
            $fileNameToStore_default_image = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('website_default_image')->storeAs('public/websiteInfo', $fileNameToStore_default_image);
        } else {
            $fileNameToStore_default_image = "noimage.jpg";
        }

        $websiteInfo = new WebsiteInfo();
        $websiteInfo->website_name = $request->input('website_name');
        $websiteInfo->website_description = $request->input('website_description');
        $websiteInfo->website_logo = $fileNameToStore_logo;
        $websiteInfo->website_favIcon = $fileNameToStore_favIcon;
        $websiteInfo->website_default_image = $fileNameToStore_default_image;
        $websiteInfo->address = $request->input('address');
        $websiteInfo->contact_number = $request->input('contact_number');
        $websiteInfo->contact_map = $request->input('contact_map');
        $websiteInfo->facebook_url = $request->input('facebook_url');
        $websiteInfo->google_url = $request->input('google_url');
        $websiteInfo->twitter_url = $request->input('twitter_url');
        $websiteInfo->instagram_url = $request->input('instagram_url');
        $websiteInfo->youtube_url = $request->input('youtube_url');
        $websiteInfo->follow_us_information = $request->input('follow_us_information');
        $websiteInfo->save();
        return redirect()->route('adminn.webInfo.index')->with('status', "Hotels Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $websiteInfo = WebsiteInfo::find($id);
        return view('admin.websiteInfo.edit')->with('websiteInfo', $websiteInfo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // echo "<pre>";
        // print_r($request);
        // die('inside update function');
        $websiteInfo = WebsiteInfo::find($id);
        $request->validate([
            'website_name' => 'required',
        ]);
        // Logo Store
        if ($request->hasFile('website_logo')) {
            $filenameWithExt = $request->file('website_logo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('website_logo')->getClientOriginalExtension();
            $fileNameToStore_logo = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('website_logo')->storeAs('public/websiteInfo', $fileNameToStore_logo);
            $websiteInfo->website_logo = $fileNameToStore_logo;
        }
        // FavIcon Store
        if ($request->hasFile('website_favIcon')) {
            $filenameWithExt = $request->file('website_favIcon')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('website_favIcon')->getClientOriginalExtension();
            $fileNameToStore_favIcon = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('website_favIcon')->storeAs('public/websiteInfo', $fileNameToStore_favIcon);
            $websiteInfo->website_favIcon = $fileNameToStore_favIcon;
        }
        // Default Website Image Store
        if ($request->hasFile('website_default_image')) {
            $filenameWithExt = $request->file('website_default_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('website_default_image')->getClientOriginalExtension();
            $fileNameToStore_default_image = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('website_default_image')->storeAs('public/websiteInfo', $fileNameToStore_default_image);
            $websiteInfo->website_default_image = $fileNameToStore_default_image;
        }

        $websiteInfo->website_name = $request->input('website_name');
        $websiteInfo->website_description = $request->input('website_description');
        $websiteInfo->address = $request->input('address');
        $websiteInfo->contact_number = $request->input('contact_number');
        $websiteInfo->contact_map = $request->input('contact_map');
        $websiteInfo->facebook_url = $request->input('facebook_url');
        $websiteInfo->google_url = $request->input('google_url');
        $websiteInfo->twitter_url = $request->input('twitter_url');
        $websiteInfo->instagram_url = $request->input('instagram_url');
        $websiteInfo->youtube_url = $request->input('youtube_url');
        $websiteInfo->follow_us_information = $request->input('follow_us_information');
        $websiteInfo->save();
        return redirect()->route('adminn.webInfo.index')->with('status', "Details Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $websiteInfo = WebsiteInfo::find($id);

        $websiteInfo->delete();
        return redirect()->route('adminn.webInfo.index')->with('status', "Website Information Deleted Successfully");
    }
}