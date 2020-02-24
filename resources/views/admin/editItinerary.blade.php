@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url("/adminn/itinerary/$itinerary->id")}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit Itinerary</h4>
                        <div class="basic-form">
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Itinerary Title</label>
                                <div class="col-sm-9" id="itinerary">

                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="itinerarytitle"
                                            placeholder="Enter Itinerary Title" name="itineraryTitle"
                                            value="{{$itinerary->title}}" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo2"></p>

                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Itinerary Description</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea type="text" class="form-control" id="itineraryDesc"
                                            name="itineraryDesc">
                                            {{$itinerary->itinerary}}
                                        </textarea>
                                    </div>
                                    <p class="form-text text-danger" id="demo2"></p>
                                </div>
                            </div>




                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Package Type</label>
                                <div class="col-sm-9">
                                    <select name="packageType" class="form-control" id="packageType" required>
                                        <option value="">Choose Package Type</option>
                                        @foreach ($packages as $package)
                                        <option value="{{$package->p_id}}" @if($package->p_id ==
                                            $itinerary->p_id) {{ 'selected' }} @endif>{{$package->p_name}}</option>
                                        @endforeach


                                    </select>
                                    <p class="form-text text-danger" id="demo3"></p>
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
                                            $itinerary->ip_id) {{ 'selected' }} @endif>{{$individualPkg->title}}
                                        </option>
                                        @endforeach


                                    </select>
                                    <p class="form-text text-danger" id="demo4"></p>
                                </div>
                            </div>



                            <input type="submit" class="btn btn-success " value="Update" name="update"
                                style="margin:0 auto; width:112px;" onclick="itineraryValidateForm()">





                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>
<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'itineraryDesc',{
        width:"100%"
    } );
</script>

@endsection
