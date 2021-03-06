<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\IndividualPackage;
use App\PackageType;
use App\PhotoGallery;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
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
        $photos = Photogallery::all();
        return view('admin.photo-gallery')->with('photos', $photos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = PackageType::all();
        $individualPkgs = IndividualPackage::all();
        return view('admin.addPhoto')->with(['packages' => $packages, 'individualPkgs' => $individualPkgs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('image')) {

            $files = $request->file('image');
            foreach ($files as $file) {
                //get the file name with the extension
                $filenameWithExt = $file->getClientOriginalName();

                //get just file name
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                //get just extension
                $extension = $file->getClientOriginalExtension();

                //file name to store
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;

                //upload image

                $path = $file->storeAs('public/pkgGall', $fileNameToStore);
                $photoGallery = new PhotoGallery();
                $photoGallery->image_title = $request->input('imageTitle');
                $photoGallery->image_name = $fileNameToStore;
                $photoGallery->p_id = $request->input('packageType');
                $photoGallery->ip_id = $request->input('individualPackage');

                $photoGallery->save();
            }
        } else {

            $fileNameToStore = "noimage.jpg";
            $photoGallery = new PhotoGallery();
            $photoGallery->image_title = $request->input('imageTitle');
            $photoGallery->image_name = $fileNameToStore;
            $photoGallery->p_id = $request->input('packageType');
            $photoGallery->ip_id = $request->input('individualPackage');

            $photoGallery->save();
        }



        return redirect()->route('adminn.photo-gallery.index');
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

        $packages = PackageType::all();
        $individualPkgs = IndividualPackage::all();
        $individualPhoto = PhotoGallery::find($id);
        return view('admin.editPhoto')->with(['packages' => $packages, 'individualPkgs' => $individualPkgs, 'individualPhoto' => $individualPhoto]);
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

        if ($request->hasFile('image')) {

            //get the file name with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();

            //get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get just extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //file name to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            //upload image

            $path = $request->file('image')->storeAs('public/pkgGall', $fileNameToStore);
        }
        //  } else {

        // //     $fileNameToStore = "noimage.jpg";
        // // }

        $photoGallery = PhotoGallery::find($id);
        $photoGallery->image_title = $request->input('imageTitle');

        if (!empty($fileNameToStore)) {
            $photoGallery->image_name = $fileNameToStore;
        }

        $photoGallery->p_id = $request->input('packageType');
        $photoGallery->ip_id = $request->input('individualPackage');

        $photoGallery->save();

        return redirect()->route('adminn.photo-gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photoGallery = PhotoGallery::find($id);
        $photoGallery->delete();

        return redirect()->route('adminn.photo-gallery.index');
    }
}
