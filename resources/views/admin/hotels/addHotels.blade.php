@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url('/adminn/hotels')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Add Hotels</h4>
                        <div class="basic-form">

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Hotel Title</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="hotelTitle"
                                            placeholder="Enter hotel title" name="hotelTitle" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Hotel Location</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="hotelLocation"
                                            placeholder="Enter hotel location" name="hotelLocation" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo2"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Hotel Contact</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="hotelContact"
                                            placeholder="Enter hotel contact" name="hotelContact" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo3"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Hotel Price</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="hotelPrice"
                                            placeholder="Enter hotel price" name="hotelPrice" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo4"></p>
                                </div>
                            </div>


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Available Room</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="availableRoom"
                                            placeholder="Enter available rooms" name="availableRoom" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo5"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Hotel Description</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="hotelDesc"
                                            placeholder="Enter hotel description" name="hotelDesc" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo6"></p>
                                </div>
                            </div>


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Hotel Amenities</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="hotelAmenities"
                                            placeholder="Enter hotel amenities" name="hotelAmenities" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo7"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Hotel Location Map</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea name="hotelLocationMap" class="form-control" id="hotelLocationMap"
                                            cols="30" rows="10" placeholder="Enter hotel Location Map"></textarea>
                                    </div>
                                    <p class="form-text text-danger" id="demo7"></p>
                                </div>
                            </div>



                            <input type="submit" class="btn btn-success " value="Add" name="add"
                                style="margin:0 auto; width:112px;" onclick="addHoteValidateForm()">





                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>


@endsection
