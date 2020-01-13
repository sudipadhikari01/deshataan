@php
use App\Http\Controllers\PagesController;
@endphp
@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">
        {{-- --}}
        <div class="col-xl-12">
            <form method="POST" action="{{ url("adminn/aboutTour/$iaboutTour->id") }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit About Tour</h4>
                        <div class="basic-form">


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Places Covered</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="placesCovered" name="placesCovered"
                                            required value="{{$iaboutTour->places_covered}}">
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Inclusions</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea class="form-control" id="tourinclusions"
                                            placeholder="Enter inclusions" name="tourinclusionsedit"
                                            required>{{$iaboutTour->inclusions}}</textarea>
                                    </div>
                                    <p class="form-text text-danger" id="demo2"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Exclusions</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea class="form-control" id="tourexclusionsedit"
                                            placeholder="Enter exclusions" name="exclusions"
                                            required>{{$iaboutTour->exclusions}}</textarea>
                                    </div>
                                    <p class="form-text text-danger" id="demo3"></p>
                                </div>
                            </div>





                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Event Date</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="datePicker1" name="eventDate"
                                            required value="{{$iaboutTour->event_date}}">
                                    </div>
                                    <p class="form-text text-danger" id="demo4"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Event Date</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea name="tourLocationMap" class="form-control" id="tourLocationMap"
                                            cols="30" rows="10"
                                            placeholder="Enter tour Location Map">{{$iaboutTour->map}}</textarea>
                                    </div>
                                    <p class="form-text text-danger" id="demo4"></p>
                                </div>
                            </div>





                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Package Type</label>
                                <div class="col-sm-9">
                                    <select name="packageType" class="form-control" id="packageType" required>
                                        <option value="">Choose Package Type</option>
                                        @foreach ($packages as $package)
                                        <option value="{{$package->p_id}}" @if($package->p_id == $iaboutTour->p_id)
                                            {{'selected'}} @endif>{{$package->p_name}}</option>
                                        @endforeach


                                    </select>
                                    <p class="form-text text-danger" id="demo5"></p>
                                </div>
                            </div>


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Individual Package</label>
                                <div class="col-sm-9">
                                    <select name="individualPackage" class="form-control" id="individualPackage"
                                        required>
                                        <option value="">Choose Individual Package Type</option>
                                        @foreach ($individualPkgs as $individualPkg)
                                        <option value="{{$individualPkg->p_id}}" @if($individualPkg->p_id ==
                                            $iaboutTour->ip_id ) {{'selected'}} @endif>
                                            {{$individualPkg->title}}</option>
                                        @endforeach


                                    </select>
                                    <p class="form-text text-danger" id="demo6"></p>
                                </div>
                            </div>



                            <input type="submit" class="btn btn-success " value="Update" name="Edit"
                                style="margin:0 auto; width:112px;" onclick="aboutTourValidateForm()">





                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>

<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'tourexclusionsedit',{
        width:"100%"
    } );
    CKEDITOR.replace( 'tourinclusionsedit',{
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
