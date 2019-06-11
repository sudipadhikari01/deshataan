@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">


        <div class="col-xl-12">
            <form method="POST" action="{{url('adminn/indipackage')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Add Individual Package</h4>
                        <div class="basic-form">


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Package Title</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername1"
                                            placeholder="Enter package title"
                                            aria-describedby="validationDefaultUsername1" name="title">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Package Description</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername2"
                                            placeholder="Enter package description"
                                            aria-describedby="validationDefaultUsername2" name="description">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Location</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername2"
                                            placeholder="Enter location" aria-describedby="validationDefaultUsername2"
                                            name="location">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Duration of Package</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername2"
                                            placeholder="Enter duration of package"
                                            aria-describedby="validationDefaultUsername2" name="duration">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Start Date</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="datePicker"
                                            placeholder="Enter start date" name="startDate">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">End Date</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="datePicker1"
                                            placeholder="Enter end date" name="endDate">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Ticket Quantity</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername2"
                                            placeholder="Enter ticket quantity" name="ticketQuantity">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Price</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername2"
                                            placeholder="Enter price of package"
                                            aria-describedby="validationDefaultUsername2" name="price">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Package Type</label>
                                <div class="col-sm-9">
                                    <select name="packageType" class="form-control">
                                        <option>Choose Package Type</option>
                                        @foreach ($packages as $package)
                                        <option value="{{$package->p_id}}">{{$package->p_name}}</option>
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
