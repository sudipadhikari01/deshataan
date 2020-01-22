@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url("/adminn/pageInfo/$editPageInfo->id")}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" value="PUT" name="_method">
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Add Page</h4>
                        <div class="basic-form">

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Page Title</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="page_name"
                                            placeholder="Enter Page Name" value="{{$editPageInfo->page_name}}"
                                            name="page_name" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Page Description</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea name="page_description" id="page_description"
                                            placeholder="Enter Page Description" cols="30" rows="10"
                                            class="form-control">{{$editPageInfo->page_description}}</textarea>
                                    </div>
                                    <p class="form-text text-danger" id="demo2"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Page Banner Image</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        @if ($editPageInfo->page_banner_image)
                                        <img src="{{ asset('storage/pageInfo').'/'.$editPageInfo->page_banner_image}}"
                                            alt="{{$editPageInfo->page_banner_image}}'s Image" class="img-responsive"
                                            style="height:auto;width:50%">
                                        @endif
                                        <input type="file" class="form-control" id="page_banner_image"
                                            aria-describedby="inputGroupPrepend2" name="page_banner_image"
                                            value="{{$editPageInfo->page_banner_image}}">
                                    </div>
                                    <p class="form-text text-danger" id="demo3"></p>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-form" value="Update" id="Update"
                                onclick="pkgValidateForm()">Update</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>


@endsection
