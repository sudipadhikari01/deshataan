@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url("adminn/photo-gallery/$individualPhoto->id")}}"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit Photo to Gallery</h4>
                        <div class="basic-form">


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Image Title</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername1"
                                            placeholder="Enter image title" name="imageTitle"
                                            value="{{$individualPhoto->image_title}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Upload Image</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id=""
                                            aria-describedby="inputGroupPrepend2" name="image"
                                            value="{{$individualPhoto->image_name}}">
                                    </div>
                                    <img src="{{ asset("/storage/photogallery/$individualPhoto->image_name") }}" alt=""
                                        style="width:150px; height:100px">
                                </div>
                            </div>




                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Package Type</label>
                                <div class="col-sm-9">
                                    <select name="packageType" class="form-control">
                                        @foreach ($packages as $package)
                                        <option value="{{$package->p_id}}" @if($individualPhoto->p_id ==
                                            $package->id ) {{ "selected "}} @endif >{{$package->p_name}}
                                        </option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Individual Package</label>
                                <div class="col-sm-9">
                                    <select name="individualPackage" class="form-control">
                                        @foreach ($individualPkgs as $individualPkg)
                                        <option value="{{$individualPkg->p_id}}" @if($individualPhoto->ip_id ==
                                            $individualPkg->p_id ) {{ "selected" }} @endif >{{$individualPkg->title}}
                                        </option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>



                            <input type="submit" class="btn btn-success " value="Update" name="update"
                                style="margin:0 auto; width:112px;">





                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>


@endsection
