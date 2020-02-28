@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">

        <div class="col-md-12">
            <div class="card forms-card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Hotel Amenity</h4>
                    <div class="basic-form">
                        <form method="POST" action="{{url("/adminn/hotel-amenities")}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-label">Amenity</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"
                                        placeholder="WIFI or Swimming pool or Live Music" name="title" id="title"
                                        required>

                                    <p class="form-text text-danger" id="demo"></p>
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-form" value="Add" id="add"
                                        onclick="pkgValidateForm()">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
