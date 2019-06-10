@extends('admin.templates.layout')
@section('content')

<div class="content-body">


<div class="container-fluid">
    
    
    <div class="col-xl-12">
    <form method="POST" action="{{url('/adminn/addHotels')}}" enctype="multipart/form-data"  >
        {{ csrf_field() }}
        <div class="card forms-card">
            <div class="card-body">
                <h4 class="card-title mb-4">Add Hotels</h4>
                <div class="basic-form">
                       
                        <div class="form-group row align-items-center">
                            <label class="col-sm-3 col-form-label text-label">Hotel Title</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername2" placeholder="Enter hotel title"  name="hotelTitle">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row align-items-center">
                            <label class="col-sm-3 col-form-label text-label">Hotel Location</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername2" placeholder="Enter hotel location"  name="hotelLocation">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row align-items-center">
                            <label class="col-sm-3 col-form-label text-label">Hotel Contact</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername2" placeholder="Enter hotel contact"  name="hotelContact">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row align-items-center">
                            <label class="col-sm-3 col-form-label text-label">Hotel Price</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername2" placeholder="Enter hotel price"  name="hotelPrice">
                                </div>
                            </div>
                        </div>


                        <div class="form-group row align-items-center">
                            <label class="col-sm-3 col-form-label text-label">Available Room</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername2" placeholder="Enter available rooms"  name="availableRoom">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row align-items-center">
                            <label class="col-sm-3 col-form-label text-label">Hotel Description</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername2" placeholder="Enter hotel description"  name="hotelDesc">
                                </div>
                            </div>
                        </div>


                        <div class="form-group row align-items-center">
                            <label class="col-sm-3 col-form-label text-label">Hotel Amenities</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername2" placeholder="Enter hotel amenities"  name="hotelAmenities">
                                </div>
                            </div>
                        </div>




                        

                       


                        <input type="submit" class="btn btn-success " value="Add" name="add"  style="margin:0 auto; width:112px;">



                       
                   
                </div>
            </div>
        </div>

    </form>
    </div>


</div>
</div>

    
@endsection