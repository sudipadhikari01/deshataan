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
                                        <input type="text" class="form-control" id="imageTitle"
                                            name="imageTitle" required
                                            value="{{$individualPhoto->image_title}}">
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Upload Image</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="image"
                                             name="image" 
                                            value="{{$individualPhoto->image_name}}">
                                    </div>
                                    <p class="form-text text-danger" id="demo2"></p>
                                    <img src="{{ asset("/storage/photogallery/$individualPhoto->image_name") }}" alt=""
                                        style="width:150px; height:100px">
                                </div>
                               
                            </div>




                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Package Type</label>
                                <div class="col-sm-9">
                                    <select name="packageType" class="form-control" id="packageType" required>

                                        <option value="">Choose Package Type</option>
                                        @foreach ($packages as $package)
                                        <option value="{{$package->p_id}}" @if($individualPhoto->p_id ==
                                            $package->p_id ) {{ "selected "}} @endif >{{$package->p_name}}
                                        </option>
                                        @endforeach


                                    </select>
                                    <p class="form-text text-danger" id="demo3"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Individual Package</label>
                                <div class="col-sm-9">
                                    <select name="individualPackage" class="form-control" id="individualPackage" required>

                                        <option value="">Choose Individual Package Type</option>
                                            @foreach ($individualPkgs as $individualPkg)
                                                <option value="{{$individualPkg->p_id}}" @if($individualPhoto->ip_id ==
                                                     $individualPkg->p_id ) {{ "selected" }} @endif >{{$individualPkg->title}}
                                                </option>
                                            @endforeach


                                    </select>
                                    <p class="form-text text-danger" id="demo4"></p>
                                </div>
                            </div>



                            <input type="submit" class="btn btn-success " value="Update" name="update"
                                style="margin:0 auto; width:112px;" onclick="photoGalleryValidateForm()">





                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>


@endsection
