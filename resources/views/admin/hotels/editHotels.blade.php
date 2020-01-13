@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url("/adminn/hotels/$hotel->h_id")}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" value="PUT" name="_method">
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit Hotels</h4>
                        <div class="basic-form">

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Hotel Title</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="hotelTitle" name="hotelTitle"
                                            value="{{$hotel->title}}" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Hotel Location</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="hotelLocation" name="hotelLocation"
                                            value="{{$hotel->location}}" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo2"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Hotel Contact</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="hotelContact" name="hotelContact"
                                            value="{{$hotel->contact}}" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo3"></p>

                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Hotel Price</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="hotelPrice" name="hotelPrice"
                                            value="{{$hotel->price}}" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo4"></p>
                                </div>
                            </div>


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Available Room</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="availableRoom" name="availableRoom"
                                            value="{{$hotel->available_room}}" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo5"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Hotel Description</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="hotelDesc" name="hotelDesc"
                                            value="{{$hotel->description}}" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo6"></p>
                                </div>
                            </div>


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Hotel Amenities</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="hotelAmenities"
                                            name="hotelAmenities" value="{{$hotel->amenities}}" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo7"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Hotel Map</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea name="hotelLocationMap" class="form-control" id="hotelLocationMap"
                                            cols="30" rows="10"
                                            placeholder="Enter hotel Location Map">{{$hotel->map}}</textarea>
                                    </div>
                                    <p class="form-text text-danger" id="demo7"></p>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-success " value="Update" name="update"
                                style="margin:0 auto; width:112px;" onclick="addHoteValidateForm()">

                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>


@endsection
