@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">

        <div class="col-md-12">
            <div class="card forms-card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Testimonial</h4>
                    <div class="basic-form">
                        <form method="POST" action="{{url("/adminn/testimonials/$testimonial->id")}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" value="PUT" name="_method">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-label">Name of Reviewer *</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Your Full name please"
                                name="name" id="name" max="100" required value="{{ $testimonial->name }}">
                                    
                                    <p class="form-text text-danger" id="demo"></p>
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-label">Email *</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" placeholder="Your Email please"
                                name="email" id="email" max="100" required value="{{ $testimonial->email }}">
                                    
                                    <p class="form-text text-danger" id="demo"></p>
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Your Address please"
                                name="address" id="address" max="100" required value="{{ $testimonial->address }}">
                                    
                                    <p class="form-text text-danger" id="demo"></p>
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-label">Testimonial *</label>
                                <div class="col-sm-9">
                                    {{-- <input type="text" class="form-control" placeholder="package description"
                                        name="packageDesc" id="packageDesc" max="300" required> --}}
                                        <textarea class="form-control" id="testimonialdescription"
                                            placeholder="Enter Your Review" name="testimonial"
                                            required>{!! $testimonial->testimonial !!}</textarea>
                                        <p class="form-text text-danger" id="demo1"></p>
                                </div> 
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Upload Image</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="image"
                                            aria-describedby="inputGroupPrepend2" name="image" accept="image/*">
                                    </div>
                                    <p class="form-text text-danger" id="demo2"></p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-form" value="Update" id="Update" onclick="pkgValidateForm()">Update</button> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'testimonialdescription',{
        width:"100%"
    } );
    // CKEDITOR.config.enterMode = CKEDITOR.ENTER_BR;
    // $('#itineraryDesc').ckeditor({
    // toolbar: 'Full',
    // enterMode : CKEDITOR.ENTER_BR,
    // shiftEnterMode: CKEDITOR.ENTER_P

    // });
</script>
@endsection
