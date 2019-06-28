@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url("/adminn/hotel-features/$hotelSpecialFeatures->id")}}"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" value="PUT" name="_method">
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit Hotels Special Features</h4>
                        <div class="basic-form">


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Places Covered</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="placesCovered"
                                            name="placesCovered" value="{{$hotelSpecialFeatures->places_covered}}" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo1"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Inclusions</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="inclusions"
                                            name="inclusions" value="{{$hotelSpecialFeatures->inclusions}}" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo2"></p>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Exclusions</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="exclusions"
                                            name="exclusions" value="{{$hotelSpecialFeatures->exclusions}}" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo3"></p>
                                </div>

                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Event Date</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="datePicker"
                                            placeholder="Enter start date" name="date"
                                            value="{{$hotelSpecialFeatures->event_date}}" required>
                                    </div>
                                    <p class="form-text text-danger" id="demo4"></p>
                                </div>
                            </div>



                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Choose Hotel Name</label>
                                <div class="col-sm-9">
                                    <select name="hotelName" class="form-control" id="hotelName" required>
                                        <option value="">Choose hotel</option>
                                        @foreach ($hotels as $hotel)
                                        <option value="{{$hotel->h_id}}" @if($hotel->
                                            h_id==$hotelSpecialFeatures->hotel_title_id) {{ 'selected' }}
                                            @endif>{{$hotel->title}}
                                        </option>
                                        @endforeach


                                    </select>
                                    <p class="form-text text-danger" id="demo5"></p>
                                </div>
                            </div>





                            <input type="submit" class="btn btn-success " value="Edit" name="Edit"
                                style="margin:0 auto; width:112px;" onclick="hotelSpecialFeatureValidateForm()">





                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>


@endsection
