<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PackageType;
use App\IndividualPackage;
use App\PhotoGallery;

class PhotoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photogallery::all();
        return view('admin.photo-gallery')->with('photos',$photos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $packages = PackageType::all();
        $individualPkgs =IndividualPackage::all();
        return view('admin.addPhoto')->with(['packages'=>$packages,'individualPkgs'=>$individualPkgs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        
        if($request->hasFile('image')){

            //get the file name with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();

            //get just file name
           $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);

            //get just extension
            $extension = $request->file('image')->getClientOriginalExtension();

            
          //file name to store
           $fileNameToStore = $filename.'_'.time().'.'.$extension;

           //upload image
           
          $path = $request->file('image')->storeAs('public/photogallery',$fileNameToStore);

      }


      else{
        
          $fileNameToStore1 ="noimage.jpg";
      }

      $photoGallery = new PhotoGallery();
      $photoGallery->image_title = $request->input('imageTitle');
      $photoGallery->image_name =  $fileNameToStore;
      $photoGallery->p_id = $request->input('packageType');
      $photoGallery->ip_id =  $request->input('individualPackage');

      $photoGallery->save();

      return redirect()->route('photo-gallery');


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
        $individualPkgs =IndividualPackage::all();
        $individualPhoto = PhotoGallery::find($id);
        return view('admin.editPhoto')->with(['packages'=>$packages,'individualPkgs'=>$individualPkgs,'individualPhoto'=>$individualPhoto]);
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
      
        
        if($request->hasFile('image')){

            //get the file name with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();

            //get just file name
           $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);

            //get just extension
            $extension = $request->file('image')->getClientOriginalExtension();

            
          //file name to store
           $fileNameToStore = $filename.'_'.time().'.'.$extension;

           //upload image
           
          $path = $request->file('image')->storeAs('public/photogallery',$fileNameToStore);

      }


      else{
        
          $fileNameToStore1 ="noimage.jpg";
      }

      $photoGallery = PhotoGallery::find($id);
      $photoGallery->image_title = $request->input('imageTitle');
      $photoGallery->image_name =  $fileNameToStore;
      $photoGallery->p_id = $request->input('packageType');
      $photoGallery->ip_id =  $request->input('individualPackage');

      $photoGallery->save();

      return redirect()->route('photo-gallery');
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

        return redirect()->route('photo-gallery');


    }
}
