<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\IndividualPackage;
// use App\PackageType;
use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
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
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index')->with(['testimonials' => $testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $testimonials = Testimonial::all();
        return view('admin.testimonials.add');
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
            'name' => 'required',
            'address' => 'required',
            // 'email' => 'sometimes|required|email',
            'email' => 'required|email',
            'testimonial' => 'required',
            
        ]);
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
            $path = $request->file('image')->storeAs('public/photogallery', $fileNameToStore);
        }
         else {
            $fileNameToStore = "noimage.jpg";
        }
            $testimonial = new Testimonial();
            $testimonial->name = $request->input('name');
            $testimonial->address = $request->input('address');
            $testimonial->image = $fileNameToStore;
            $testimonial->email = $request->input('email');
            $testimonial->testimonial = $request->input('testimonial');

            $testimonial->save();
        return redirect()->route('adminn.testimonials.index');
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

        $testimonials = Testimonial::find($id);
        return view('admin.testimonials.edit')->with(['testimonial' => $testimonials]);
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
            'name' => 'required',
            'address' => 'required',
            // 'email' => 'sometimes|required|email',
            'email' => 'required|email',
            'testimonial' => 'required',
            
        ]);
        $testimonial = Testimonial::find($id);
        
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

            $path = $request->file('image')->storeAs('public/photogallery', $fileNameToStore);
        }

        if (!isset($fileNameToStore)) {
            $fileNameToStore = $testimonial->image;
            }
        $testimonial->name = $request->input('name');
        $testimonial->address = $request->input('address');
        $testimonial->email = $request->input('email');
        $testimonial->image = $fileNameToStore;
        $testimonial->testimonial = $request->input('testimonial');

        $testimonial->save();

        return redirect()->route('adminn.testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();

        return redirect()->route('adminn.testimonials.index');
    }

    public static function count()
    {
        return Testimonial::count();
    }
}
