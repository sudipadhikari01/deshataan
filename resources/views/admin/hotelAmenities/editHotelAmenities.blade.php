@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">

        <div class="col-md-12">
            <div class="card forms-card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Hotel Amenity</h4>
                    <div class="basic-form">
                        <form method="POST" action="{{url("/adminn/hotel-amenities/$hotel_amenities->id")}}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" value="PUT" name="_method">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-label">Amenity</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"
                                        placeholder="WIFI or Swimming pool or Live Music" name="title" id="title"
                                        max="100" required value="{{ $hotel_amenities->title }}">

                                    <p class="form-text text-danger" id="demo"></p>
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-form" value="Update" id="Update" ">Update</button>
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
