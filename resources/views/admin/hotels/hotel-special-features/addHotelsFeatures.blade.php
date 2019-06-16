@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url('adminn/hotel-features')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Add Hotels Special Features</h4>
                        <div class="basic-form">


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Places Covered</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername1"
                                            placeholder="Enter places covered"
                                            aria-describedby="validationDefaultUsername1" name="placesCovered">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Inclusions</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername1"
                                            placeholder="Enter the inclusions"
                                            aria-describedby="validationDefaultUsername1" name="inclusions">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Exclusions</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername1"
                                            placeholder="Enter the exclusions"
                                            aria-describedby="validationDefaultUsername1" name="exclusions">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Event Date</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="datePicker"
                                            placeholder="Enter start date" name="date">
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
