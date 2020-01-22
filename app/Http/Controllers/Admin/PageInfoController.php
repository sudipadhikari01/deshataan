<?php

namespace App\Http\Controllers\admin;

use App\PageInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pages = PageInfo::all();
        return view('admin.pageInfo.index')->with('pages', $pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pageInfo.create');
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
            'page_name' => 'required',
            'page_slug' => 'required',
            'page_description' => 'required',
            'page_banner_image' => 'required',

        ]);

        if ($request->hasFile('page_banner_image')) {
            //get the file name with the extension
            $filenameWithExt = $request->file('page_banner_image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('page_banner_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //upload page_banner_image
            $path = $request->file('page_banner_image')->storeAs('public/pageInfo', $fileNameToStore);
        } else {
            $fileNameToStore = "noimage.jpg";
        }
        $pageInfo = new PageInfo();
        $pageInfo->page_name = $request->input('page_name');
        $pageInfo->page_slug = $request->input('page_slug');
        $pageInfo->page_description = $request->input('page_description');
        $pageInfo->page_banner_image = $fileNameToStore;

        $pageInfo->save();

        return redirect()->route('adminn.pageInfo.index')->with('status', "Hotels Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function show(PageInfo $pageInfo)
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
        $editPageInfo = PageInfo::find($id);
        return view('admin.pageInfo.edit')->with('editPageInfo', $editPageInfo);
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
        $pageInfo = PageInfo::find($id);
        $request->validate([
            'page_name' => 'required',
            'page_slug' => 'required',
            'page_description' => 'required',

        ]);

        if ($request->hasFile('page_banner_image')) {
            //get the file name with the extension
            $filenameWithExt = $request->file('page_banner_image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('page_banner_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //upload page_banner_image
            $path = $request->file('page_banner_image')->storeAs('public/pageInfo', $fileNameToStore);
            $pageInfo->page_banner_image = $fileNameToStore;
        }


        $pageInfo->page_name = $request->input('page_name');
        $pageInfo->page_slug = $request->input('page_slug');
        $pageInfo->page_description = $request->input('page_description');

        $pageInfo->save();
        return redirect()->route('adminn.pageInfo.index')->with('status', "Hotels Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pageInfo = PageInfo::find($id);

        $pageInfo->delete();
        return redirect()->route('adminn.pageInfo.index')->with('status', "Hotels Deleted Successfully");
    }
}