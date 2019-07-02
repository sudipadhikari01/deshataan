@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url("adminn/roomavailabilities/$hotelRoomAvai->id")}}"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit Hotel Room Availabilities</h4>
                        <div class="basic-form">


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Title</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="title"
                                            name="title" value="{{$hotelRoomAvai->title}}" required>
                                    </div>
                                    <div class="text-form text-danger" id="demo1"></div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Amenities</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="amenities"
                                            name="amenities" value="{{$hotelRoomAvai->amenities}}" required>
                                    </div>
                                    <div class="text-form text-danger" id="demo2"></div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Includes</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="includes"
                                            name="includes" value="{{$hotelRoomAvai->includes}}" required>
                                    </div>
                                    <div class="text-form text-danger" id="demo3"></div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Maximum Person</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="maximumPerson"
                                            name="maximumPerson" value="{{$hotelRoomAvai->maximum_person}}" required>
                                    </div>
                                    <div class="text-form text-danger" id="demo4"></div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Price</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="price"
                                            name="price" value="{{$hotelRoomAvai->price}}" required>
                                    </div>
                                    <div class="text-form text-danger" id="demo5"></div>
                                </div>
                            </div>




                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Choose Hotel Name</label>
                                <div class="col-sm-9">
                                    <select name="hotelName" class="form-control" id="hotelName" required>
                                        <option value="">Choose Hotels Type</option>
                                        @foreach ($hotels as $hotel)
                                        <option value="{{$hotel->h_id}}" @if($hotel->h_id ==
                                            $hotelRoomAvai->hotel_type_id) {{ "selected" }} @endif>{{$hotel->title}}
                                        </option>
                                        @endforeach


                                    </select>
                                    <div class="text-form text-danger" id="demo6"></div>
                                </div>
                            </div>





                            <input type="submit" class="btn btn-success " value="Update" name="Edit"
                                style="margin:0 auto; width:112px;" onclick="hotelRoomAvaiValidateForm()">





                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>


@endsection
