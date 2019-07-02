@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url('adminn/roomavailabilities')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Add Hotel Room Availabilities</h4>
                        <div class="basic-form">


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Title</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername1"
                                            placeholder="Enter title" aria-describedby="validationDefaultUsername1"
                                            name="title">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Amenities</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername1"
                                            placeholder="Enter amenities" aria-describedby="validationDefaultUsername1"
                                            name="amenities">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Includes</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername1"
                                            placeholder="Enter what are includes"
                                            aria-describedby="validationDefaultUsername1" name="includes">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Maximum Person</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername1"
                                            placeholder="Enter the maximum number of person"
                                            aria-describedby="validationDefaultUsername1" name="maximumPerson">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Price</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername1"
                                            placeholder="Enter the price" aria-describedby="validationDefaultUsername1"
                                            name="price">
                                    </div>
                                </div>
                            </div>




                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Choose Hotel Name</label>
                                <div class="col-sm-9">
                                    <select name="hotelName" class="form-control">
                                        <option>Choose Hotels Type</option>
                                        @foreach ($hotels as $hotel)
                                        <option value="{{$hotel->h_id}}">{{$hotel->title}}</option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>





                            <input type="submit" class="btn btn-success " value="Add" name="add"
                                style="margin:0 auto; width:112px;">





                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>


@endsection
