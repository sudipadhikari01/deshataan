@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url("/adminn/tourtips/$tourtip->id")}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" value="PUT" name="_method">
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit Tip</h4>
                        <div class="basic-form">

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Tip Title</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="tip_title"
                                            placeholder="Enter Page Name" value="{{$tourtip->tip_title}}"
                                            name="tip_title" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Tip Description</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea name="tip_description" id="tip_description"
                                            placeholder="Enter Tip Description" cols="30" rows="10"
                                            class="form-control">{{$tourtip->tip_description}}</textarea>
                                    </div>
                                    <p class="form-text text-danger" id="demo2"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label"> Image</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        @if ($tourtip->image)
                                        <div style="width: 30%;">
                                            <img src="{{ asset('storage/tourtips').'/'.$tourtip->image}}"
                                                alt="{{$tourtip->image}}'s Image" class="img-responsive"
                                                style="height:auto;width:50%">

                                        </div>
                                        @endif
                                        <input type="file" class="form-control" id="image"
                                            aria-describedby="inputGroupPrepend2" name="image"
                                            value="{{$tourtip->image}}">
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
